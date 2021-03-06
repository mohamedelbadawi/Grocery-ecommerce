<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('shop');
    }
    public function getSingleProduct(Product $product)
    {

        $relatedProducts = cache()->remember('product-relatedProducts', 60 * 2, function () use ($product) {
            return Product::where('category_id', $product->category_id)->with(['images', 'rates'])->paginate(4);
        });


        return view('product', compact('product', 'relatedProducts'));
    }

    public function cart()
    {

        return view('cart');
    }

    public function checkout()

    {
        
        $user = User::findOrFail(auth()->id())->with(['addresses'])->get();
        return view('checkout', compact('user'));
    }
}
