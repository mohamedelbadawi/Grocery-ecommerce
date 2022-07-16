<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        // TODO::check cart empty
        $order = Order::create(['user_id' => $user->id, 'address_id' => $user->addresses->first()->id, 'subtotal' => $user->cart->total(), 'shipping' => 20, 'total' => $user->cart->total() + 20,]);
        foreach ($user->cart->products as $product) {
            OrderProduct::create(['product_id' => $product->product_id, 'order_id' => $order->id, 'quantity' => $product->quantity, 'total' => $product->product->price * $product->quantity]);
            $product->product->update(['stock' => $product->product->stock - $product->quantity]);
        }
        $user->cart->products()->delete();
        // dd($user->name);
        $orderData = [
            'order_id' => $order->id,
            'user_name' => $user->name,
            'address' => $user->addresses->first()->city,
            'total' => $order->total
        ];
        // dd($orderData['name']);
        $admins = Admin::all();
        Notification::send($admins, new OrderNotification($orderData));
        return response()->json(['Total' => $order->total]);
    }
}
