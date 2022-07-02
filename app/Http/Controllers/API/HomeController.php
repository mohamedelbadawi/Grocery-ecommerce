<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductCollection;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('featured', 1)->paginate(10);
        $categories = Category::all();
        return ['products' => $products, 'categories' => CategoryResource::collection($categories)];
    }
}
