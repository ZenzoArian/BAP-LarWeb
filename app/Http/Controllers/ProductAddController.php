<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('product.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productData = $request->validate([
          'title' => 'required|min:3',
          'description' => 'required|min:10',
          'price' => 'required|numeric|gt:0',
          'pub_date' => 'required|after_or_equal:today',
          ]
        );

        //gegevens in database opslaan

        // $product = new Product();
        // $product->title = $productData['title'];
        // $product->description = $productData['description'];
        // $product->price = $productData['price'];
        // $product->pub_date = $productData['pub_date'];
        //
        //
        // $product->save();

        $product = Product::create($productData);

        return 'gelukt';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
