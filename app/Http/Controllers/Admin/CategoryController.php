<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        //dd($categories);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories|max:255',
            'description'=>'required',
            'color'=>'required',
        ]);

        $category = new Category([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'color' => $request->get('color'),
        ]);

        $category->save();

        $message = $category ? 'Categoria agregada exitosamente' : 'La categoria no puedo agregarse';

        return redirect()->route('category.index')->with('message',$message);
    }

 
    public function show($id)
    {
        //
       
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
