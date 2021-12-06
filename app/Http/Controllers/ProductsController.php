<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    // Returns a list of products
    public function index()
    {
        //$products= Product::all();
        $products = Product::latest()->paginate(5);
        return view('products.index',['products'=> $products]);
        //return view('product-index', compact('$products'));
        //return  $products;
    }

    // It takes you to the creation page.
    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        //
        $request -> validate([
            'name' => 'required',
            //'category_id' => 'required',
            //'inventory_id' => 'required',
            'price' => 'required'
        ]);
        $product = Product::create($request->all());
        return redirect() -> route('products.index')
        -> with('success','product added successfully');
    }


    public function show(Product $product)
    {
        // Display the specified resourse.
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        //
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        //
        $request -> validate([
            'name' => 'required',
            //'category_id' => 'required',
            //'inventory_id' => 'required',
            'price' => 'required'
        ]);

        $product->name = $request->name ;
        $product->price = $request->price;
        $product->save();

       // $product = Product::update([,]);
        return redirect() -> route('products.index')
        -> with('success','product updated successfully');
    }


    public function destroy(Product $product)
    {
        //
        $product -> delete();
        return redirect() -> route('products.index')
        -> with('success','product deleted successfully');
    }


}
