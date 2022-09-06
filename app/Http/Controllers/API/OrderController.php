<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\OrderNotification as JobsOrderNotification;
use App\Jobs\OrderNotificationJob;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Cartalyst\Stripe\Stripe;

class OrderController extends Controller
{

    public function checkout()
    {


        if (!$this->paymentMethod) {

            return response()->json('you must pass the payment method');
        }

        if (auth()->user()->defaultAddress->isEmpty()) {
            return response()->json('you must make a default address');
        }

        $user = auth()->user();
        if ($this->paymentMethod == 'cash') {
            $this->createOrder('cash');

            return redirect()->route('home');
        } else if ($this->paymentMethod == 'card') {

            $order = $this->createOrder($user);
            $stripe = Stripe::make(env('STRIPE_KEY'));

            $token = $stripe->tokens()->create(['card' => [
                'number' => $this->cardNumber,
                'exp_month' => $this->month,
                'exp_year' => $this->year,
                'cvc' => $this->cvc,
            ]]);

            $customer = $stripe->customers()->create([
                'name' => $user->name,
                'email' => $user->email,
                'source' => $token['id']
            ]);
            $charge = $stripe->charges()->create([
                'customer' => $customer['id'],
                'currency' => 'USD',
                'amount' => \Cart::instance('cart')->total() + 20,
            ]);

            if ($charge['status'] == 'succeeded') {
                $this->makeTransaction($user, $order, 'card', 'approved');
            } else {
                $this->makeTransaction($user, $order, 'card', 'canceled');
                return response()->json('something error');
            }
        }
    }

    public function createOrder($user)
    {

        $order = Order::create(['user_id' => $user->id, 'address_id' => $user->defaultAddress->first()->id, 'subTotal' => \Cart::instance('cart')->subtotal(), 'shipping' => 20, 'total' => \Cart::instance('cart')->subtotal() + 20,]);
        foreach (\Cart::instance('cart')->content() as $item) {
            $product = Product::findOrFail($item->id);
            $product->update(['stock' => $product->stock - $item->quantity]);
            OrderProduct::create(['order_id' => $order->id, 'product_id' => $item->id, 'quantity' => $item->qty, 'total' => $item->total]);
        }
        return $order;
    }
    public function makeTransaction($user, $order, $method, $status)
    {

        Transaction::create(['user_id' => $user->id, 'order_id' => $order->id, 'method' => $method, 'status' => $status]);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'icon' => 'success',
            'message' => "Orded created successfully (total: {$order->total})",
        ]);
        \Cart::instance('cart')->destroy();
        \Cart::instance('cart')->deleteStoredCart($user->email);
    }
}
