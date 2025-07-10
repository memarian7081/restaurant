<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('adminPanel.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('adminPanel.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath = $request->file('image')->store('categories', 'public');
        }
        Category::create([
            'name' => $validated['name'],
            'image' => $filePath,
            'description' => $validated['description'],
            'discount' => $validated['discount'],
        ]);
        return redirect()->route('category.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        $categories = Category::findOrFail($id);
        return view('adminPanel.category.edit', compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(UpdateCategoryRequest $request, $id)
{
    $categories = Category::findOrFail($id);
    $validated = $request->validated();

    $updateData = [
        'name' => $validated['name'],
        'description' => $validated['description'],
        'discount' => $validated['discount'],
    ];

    if ($request->hasFile('image')) {
        $filePath = $request->file('image')->store('categories', 'public');
        $updateData['image'] = $filePath;
    }

    $categories->update($updateData);

    return redirect()->route('category.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
