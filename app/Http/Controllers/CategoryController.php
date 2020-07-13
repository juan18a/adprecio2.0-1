<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('categories.create');
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
                    'categoria' => 'required'
            ]);

            $category = new Category([
                    'uuid' => Uuid::generate()->string,
                    'category'=> $request->get('categoria')
            ]);

             $category->save();

             return redirect('/categories')->with('success', 'Se he registrado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {         

        $cat = Category::find($category['id']);
        return view('categories.edit', compact('cat'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
            $request->validate([
                    'categoria' => 'required'
            ]);

            $cat = Category::find($category['id']);
            $cat->category =  $request->get('categoria');
            $cat->save();

            return redirect('/categories')->with('success', 'Se ha actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(Category::destroy($category->id)){

                $cat = Category::withTrashed()->get();
                
                if($cat){

                        return redirect('/categories')->with('success', 'Se ha eliminado correctamente');

                }

        }
    }
}
