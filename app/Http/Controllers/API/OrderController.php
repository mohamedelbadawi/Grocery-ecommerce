<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $order = Order::create(['user_id' => $user->id, 'address_id' => $user->addresses->first()->id, 'subtotal' => $user->cart->total(), 'shipping' => 20, 'total' => $user->cart->total() + 20,]);
        foreach ($user->cart->products as $product) {
            OrderProduct::create(['product_id' => $product->product_id, 'order_id' => $order->id, 'quantity' => $product->quantity, 'total' => $product->product->price * $product->quantity]);
        }
        $user->cart->products()->delete();
        return response()->json(['Total' => $order->total]);
    }
}
