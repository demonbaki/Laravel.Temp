<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Product;
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
        return view('product/showproducts', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource. : Response
     */
    public function create()
    {
        return view('product/create-product');
    }

    /**
     * Store a newly created resource in storage. : RedirectResponse
     */
    public function store(Request $request)
    {
           Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/products') : 'img/default.png',

            ]
        );

            return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.: Response
    
     */
    public function show(Product $product){
        return view('product/show-product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        //
    }

    public function getProductByUser(User $user){
        return view('product/showuserProducts', compact('user'));
    }
}

