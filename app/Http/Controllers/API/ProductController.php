<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function rateProduct(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            // 'id' => 'required',
            'star_rate' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        Rate::create(['product_id' => $request->id, 'star_rate' => $request->star_rate, 'user_id' => auth()->id()]);
        return response()->json(['message' => 'done']);
    }
}
