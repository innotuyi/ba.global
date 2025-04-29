<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipmentCategory = Category::where('name', 'Equipment')->first();

        if ($equipmentCategory) {
            $equipment = Product::where('category_id', $equipmentCategory->id)->get();
            return view('equipment.index', ['products' => $equipment, 'categoryName' => 'Physiotherapy Equipment']);
        } else {
            // Handle the case where the 'Equipment' category doesn't exist
            abort(404, 'Equipment category not found.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'product_type' => 'required|in:equipment,consumables,furniture,other',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'product_type' => 'required|in:equipment,consumables,furniture,other',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    public function categories()
    {
        return redirect()->route('admin.categories.index');
    }
}