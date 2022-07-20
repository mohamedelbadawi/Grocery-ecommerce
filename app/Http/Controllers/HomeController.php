<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $categories = cache()->remember('homepage-categories', 60 * 2, function () {
            return Category::all()->toArray();
        });
        $featuredProducts = cache()->remember('homepage-featuredProducts', 60 * 2, function () {
            return Product::where('featured', 1)->with('images')->paginate(8);
        });

        return view('home', compact('categories', 'featuredProducts'));
    }
}
