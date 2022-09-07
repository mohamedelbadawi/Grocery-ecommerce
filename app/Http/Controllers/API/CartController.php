<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartProducts()
    {
        $authUser = Auth::user();
        $cart = \Cart::instance('cart')->content();
        
        return  CartResource::make($cart);
    }
    public function addProduct(Request $request)
    {

        $authUser = Auth::user();
        $product = Product::findOrFail($request->product_id);
        \Cart::instance('cart')->add($product->id, $product->name, $request->quantity, $product->price, ['description' => $product->description, 'image' => $product->mainImage->image], 0);

        if (Auth::check()) {
            \Cart::instance('cart')->store(auth()->user()->email);
        }

        return response()->json(['Message' => 'Done']);
    }
    public function clearCart(Request $request)
    {
        $user = Auth::user();

        \Cart::instance('cart')->deleteStoredCart($user->email);

        return response()->json(['Message' => 'Cleared succesfully']);
    }


    public function removeProduct(Request $request)
    {
        \Cart::instance('cart')->restore(auth()->user()->email);
        \Cart::instance('cart')->remove($request->rowId);
        \Cart::instance('cart')->store(auth()->user()->email);
        return response()->json(['Message' => 'Done']);
    }
}
