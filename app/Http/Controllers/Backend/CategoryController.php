<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\storeCategory;
use App\Http\Requests\Category\updateCategory;
use App\Models\Category;
use App\traits\ImageHelper;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageHelper;
    public function index()
    {
        try {
            $categories = Category::withCount(['products'])->get();
        } catch (Exception $ex) {
            return redirect()->route('admin.dashboard')->with('error', 'Something error');
        }
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {

        return view('admin.category.create');
    }
    public function store(storeCategory $request)
    {
        try {
            $path = $this->uploadImage($request->image, 'assets/categories/', 500, $request->name);
            $path = 'assets/categories/' . $path;
            Category::create(['name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar
            ], 'image' => $path]);
        } catch (Exception $ex) {
            return redirect()->route('admin.dashboard')->with('error', 'Something error');
        }
        return redirect()->route('admin.category')->with('success', 'Created successfully');
    }
    public function edit(Category $category)
    {

        return view('admin.category.edit', compact('category'));
    }
    public function update(updateCategory $request, Category $category)
    {
        try {

            if ($request->hasFile('image')) {
                $this->deleteImage($category->image);
                $path = $this->uploadImage($request->image, 'assets/categories/', 500, $request->name);
                $path = 'assets/categories/' . $path;
                $category->update(['name' => $request->name, 'image' => $path]);
            }
            $category->update(['name' => $request->name]);
        } catch (Exception $ex) {
            return redirect()->route('admin.dashboard')->with('error', 'Something error');
        }
        return redirect()->route('admin.category')->with('success', 'Updated successfully');;
    }
    public function delete(Category $category)
    {
        try {
            $this->deleteImage($category->image);
            $category->delete();
        } catch (Exception $ex) {
            return redirect()->route('admin.dashboard')->with('error', 'Something error');
        }
        return redirect()->route('admin.category')->with('success', 'Deleted successfully');
    }
}
