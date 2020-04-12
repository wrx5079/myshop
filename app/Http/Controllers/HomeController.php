<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->paginate(8);
        return view('pages.index',compact('products','brands'));
    }

    public function show($slug)
    {
       $product = Product::where('slug', $slug)->firstOrFail();
       return view('pages.show' , compact('product'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->where('status', 1)->paginate(8);

        return view('pages.list', compact('products'));
    }

    public function brand($slug)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        $products = $brand->products()->where('status', 1)->paginate(8);

        return view('pages.list', compact('products'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = Product::where('title', 'like', '%'.$search.'%')->paginate(8);

        return view('pages.list', compact('products'));
    }
}
