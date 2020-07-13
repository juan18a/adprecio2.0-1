<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'stock' => 'required',
                    'price' => 'required',
                    'category_product' => 'required'
            ]);


            $active = 1;

            $product = new Product([

                    'uuid' => Uuid::generate()->string,
                    'fk_category'=> $request->get('category_product'),
                    'fk_status'=> $active,
                    'codigo_producto' => uniqid(),
                    'name' => $request->get('name'),
                    'description' => $request->get('description'),
                    'stock' => $request->get('stock'),
                    'price' => $request->get('price')
                 

            ]);

             $product->save();

             return redirect('/products')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        if($request->get('operacion') == 'express'){

              $request->validate([
                    'name' => 'required',
                    'price' => 'required'
              ]);

                $cat = Product::find($request->get('id'));
                $cat->name =  $request->get('name');
                $cat->stock =  $request->get('stock');
                $cat->price =  $request->get('price');
                $cat->save();

            return redirect('/products')->with('success', 'Se ha actualizado correctamente');


        }else if($request->get('operacion') == 'completa'){

              

        }
            


            
    






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
