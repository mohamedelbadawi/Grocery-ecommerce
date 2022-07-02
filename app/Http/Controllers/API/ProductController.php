<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('Category')->paginate(10);
        return ProductResource::collection($products);
    }
    public function category($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products;
        return ProductCollection::make($products);
    }
    public  function Product($id)
    {
        $product = Product::findOrFail($id);
        return ProductResource::make($product);
    }
}
