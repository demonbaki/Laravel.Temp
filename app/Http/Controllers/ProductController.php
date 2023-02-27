<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $products = Product::all();
        return view ('product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = Category::all();
        return view('product/create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $product = Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'img'=> $request->has('img') ? $request->file('img')->store('public/products') : '/img/default.jpg',  
                'category_id' => $request->input('category_id')              
            ]
        );

        foreach ($request->input('tag_id') as $tag ) {
            $product->tags()->attach($tag);
        }
        return redirect()->back()->with('message', 'Prodotto creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product/show-product', compact('product'));
    }

    public function getProductByUser(User $user){
       
        return view('product/productUser', compact('user'));
    }

    public function productsByCategory(Category $category){
       
        return view('product/category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
        return view('product/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $product->update(
            [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'img'=> $request->has('img') ? $request->file('img')->store('public/products') : '/img/default.jpg',  
                'category_id' => $request->input('category_id')              
            ]
        );

         $product->categories()->sync($request->input('category_id'));

        $product->tags()->sync($request->input('tag_id'));        
        
        return redirect()->back()->with('message', 'Prodotto aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('message', 'Prodotto eliminato');
    }
}