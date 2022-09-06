<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function index()
    // {
    //     // $carts = \Cart::instance('cart')->restore();
    //     // dd($carts);

    //     return view('admin.cart.index', compact('carts'));
    // }
    // public function freeCart(Cart $cart)
    // {
    //     try {
    //         $cart->products()->delete();
    //     } catch (\Throwable $th) {
    //         return redirect()->back()->with('error', 'Something error');
    //     }
    //     return redirect()->route('admin.cart')->with('success', 'Cart products deleted successfully');
    // }
}
