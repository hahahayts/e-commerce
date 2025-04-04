<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        return inertia('Products/Index', [
            // 'products' => Product::all(),
            'products' => Product::paginate(12),
            'categories' => $categories,
        ]);
    }

    public function show(Category $category)
    {

        // dd($category);
       $products = $category->products()->paginate(12) ;


       $categories = Category::orderBy('name')->get();

       return inertia('Products/Index', [
           'products' => $products,
           'categories' => $categories,
           'selectedCategory' => $category
       ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // dd('okay');
        $categories = Category::orderBy('name')->get();


        return inertia('Products/Create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
