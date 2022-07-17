<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\storeProduct;
use App\Http\Requests\Product\updateProduct;
use App\Jobs\ProductsStockJob;
use App\Models\Category;
use App\Models\Image;
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('categories', 'product'));
    }
    public function update(Product $product, updateProduct $request)
    {
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'featured' => $request->featured,
            'stock' => $request->stock,
        ]);
        if ($request->hasFile('images') > 0) {
            foreach ($request->images as $image) {
                $file = $this->uploadImage($image, 'assets/products/', 1000, $product->name);
                Image::create([
                    'product_id' => $product->id,
                    'image' => 'assets/products/' . $file
                ]);
            }
        }
        return redirect()->route('admin.product')->with('success', 'Product created successfully');
    }
    public function store(storeProduct $request)
    {
        try {
            $product = Product::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'status' => $request->status,
                'featured' => $request->featured,
                'stock' => $request->stock,
            ]);
            foreach ($request->images as $image) {
                $file = $this->uploadImage($image, 'assets/products/', 1000, $product->name);
                Image::create([
                    'product_id' => $product->id,
                    'image' => 'assets/products/' . $file
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.products')->with('error', 'something error');
        }


        return redirect()->route('admin.product')->with('success', 'Product created successfully');
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

    public function deleteProductimage($id)
    {
        try {
            Image::findOrFail($id)->delete();
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }
}
