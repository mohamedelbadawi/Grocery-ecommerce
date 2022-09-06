<?php

namespace App\Http\Livewire\Front;

use App\Jobs\OrderNotificationJob;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;
use Cartalyst\Stripe\Stripe;

class PaymentMethod extends Component
{
    public $paymentMethod;
    public $cardNumber;
    public $month;
    public $year;
    public $cvc;

    protected $rules = [

        'cardNumber' => 'required',
        'month' => 'required',
        'year' => 'required',
        'cvc' => 'required',

    ];



    public function placeOrder()
    {


        if (!$this->paymentMethod) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'icon' => 'error',
                'message' => "you should choose a payment method",
            ]);
            return redirect()->back();
        }

        if (auth()->user()->defaultAddress->isEmpty()) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'icon' => 'error',
                'message' => "you should add or make a default address",
            ]);
            return redirect()->back();
        }

        $user = auth()->user();
        if ($this->paymentMethod == 'cash') {
            $order = $this->createOrder('cash');
            $orderData = ['order_id' => $order->id, 'user_name' => auth()->user()->name, 'address' => auth()->user()->defaultAddress->first()->id, 'total' => $order->total];
            OrderNotificationJob::dispatch($orderData);
            return redirect()->route('home');
        } else if ($this->paymentMethod == 'card') {

            $this->validate();
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
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'icon' => 'error',
                    'message' => "Orded can't created right now",
                ]);
            }
            $orderData = ['order_id' => $order->id, 'user_name' => auth()->user()->name, 'address' => auth()->user()->defaultAddress->first()->id, 'total' => $order->total];
            OrderNotificationJob::dispatch($orderData);
            return redirect()->route('home');
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

    public function render()
    {
        return view('livewire.front.payment-method');
    }
}
