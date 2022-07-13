<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartProducts()
    {
        $authUser = Auth::user();
        $cart = $authUser->cart;
        return  CartResource::make($cart);
    }
    public function addProduct(Request $request)
    {

        $authUser = Auth::user();
        $cartId = $authUser->cart->id;
        // check the product
        if ($cart = CartProduct::where('product_id', $request->product_id)->where('cart_id', $cartId)->first()) {
            $cart->update(['quantity' => $request->quantity]);
        } else {
            CartProduct::create(['cart_id' => $cartId, 'product_id' => $request->product_id, 'quantity' => $request->quantity]);
        }
        return response()->json(['Message' => 'Done']);
    }
    public function clearCart(Request $request)
    {
        $authUser = Auth::user();
        $cartId = $authUser->cart->id;
        CartProduct::query()->where('cart_id', $cartId)->delete();
        return response()->json(['Message' => 'Cleared succesfully']);
    }
   

    public function removeProduct(Request $request)
    {
        $authUser = Auth::user();
        $cartId = $authUser->cart->id;
        CartProduct::where('cart_id', $cartId)->where('product_id', $request->product_id)->first()->delete();
        return response()->json(['Message' => 'Done']);
    }
}
