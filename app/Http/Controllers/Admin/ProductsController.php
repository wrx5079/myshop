<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('title', 'id')->all();
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'date' => 'required'
        ]);
        $product = Product::add($request->all());
        $product->uploadImage($request->file('image'));
        $product->setCategory($request->get('category_id'));
        $product->setBrand($request->get('brand_id'));
        $product->toogleStatus($request->get('status'));

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::pluck('title', 'id')->all();
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.edit', compact('product','brands','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'date' => 'required'
        ]);
        $product = Product::find($id);
        $product->edit($request->all());
        $product->uploadImage($request->file('image'));
        $product->setCategory($request->get('category_id'));
        $product->setBrand($request->get('brand_id'));
        $product->toogleStatus($request->get('status'));

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->remove();
        return redirect()->back();
    }
}
