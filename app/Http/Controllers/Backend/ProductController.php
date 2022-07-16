<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\storeProduct;
use App\Jobs\ProductsStockJob;
use App\Models\Category;
use App\Models\Product;
use App\traits\ImageHelper;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageHelper;
    public function index()
    {

        $products = Product::with(['images', 'category'])->get();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(storeProduct $request)
    {
    }
    public function delete(Product $product)
    {
        try {
            foreach ($product->images() as $image) {
                $this->deleteImage($image);
            }
            $product->delete();
        } catch (\Throwable $th) {
            return redirect()->route('admin.products')->with('error', 'something error');
        }
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
    }

    public function getReportOfProductsLowStock()
    {
        try {
            ProductsStockJob::dispatch();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'something error');
        }
        return redirect()->back()->with('success', 'file is  proccessing');
    }
}
