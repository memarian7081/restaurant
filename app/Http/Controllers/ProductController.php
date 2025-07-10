<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $products =Product::with('category')->get();
        return view('adminPanel.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminPanel.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath = $request->file('image')->store('products','public');
        }
        Product::create([
            'name' =>$validated['name'],
            'price' =>$validated['price'],
            'description' =>$validated['description'],
            'category_id' =>$validated['category_id'],
            'image' =>$filePath,
            'quantity' =>$validated['quantity'],
            'discount' =>$validated['discount'],
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail($product);
        return view('adminPanel.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('adminPanel.products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $products = Product::findOrFail($id);
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath = $request->file('image')->store('products','public');
        }
        $products->update([
            'name' =>$validated['name'],
            'price' =>$validated['price'],
            'description' =>$validated['description'],
            'category_id' =>$validated['category_id'],
            'image' =>$filePath,
            'quantity' =>$validated['quantity'],
            'discount' =>$validated['discount'],
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
