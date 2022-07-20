<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index()
    {
        $products = cache()->remember('shop-products', 60 * 5, function () {
            return Product::with(['category','mainImage'])->paginate(12);
        });
        return view('shop', compact('products'));
    }
    public function getSingleProduct(Product $product)
    {

        $relatedProducts = cache()->remember('product-relatedProducts', 60 * 2      , function () use ($product) {
            return Product::where('category_id', $product->category_id)->with(['images', 'rates'])->paginate(4);
        });


        return view('product', compact('product', 'relatedProducts'));
    }
}
