<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\OrderNotification as JobsOrderNotification;
use App\Jobs\OrderNotificationJob;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $user = Auth::user();
        if ($user->Cart->products->count() > 0) {
            
            $order = Order::create(['user_id' => $user->id, 'address_id' => $user->addresses->first()->id, 'subtotal' => $user->cart->total(), 'shipping' => 20, 'total' => $user->cart->total() + 20,]);
            foreach ($user->cart->products as $product) {
                OrderProduct::create(['product_id' => $product->product_id, 'order_id' => $order->id, 'quantity' => $product->quantity, 'total' => $product->product->price * $product->quantity]);
                $product->product->update(['stock' => $product->product->stock - $product->quantity]);
            }
            $user->cart->products()->delete();
            $orderData = [
                'order_id' => $order->id,
                'user_name' => $user->name,
                'address' => $user->addresses->first()->city,
                'total' => $order->total
            ];
            OrderNotificationJob::dispatch($orderData);
        } else {
            return response()->json(['Cart is empty']);
        }
        return response()->json(['Total' => $order->total]);
    }
}
