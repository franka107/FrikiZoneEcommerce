<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        
        return view('admin.product.index', compact('products'));
    }

   
    public function create()
    {
         //$categories = Category::orderBy('id', 'desc')->lists('name','id');
         $categories = Category::all();
         return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|max:40|unique:products',
            'description' => 'required|max:255',
            'extract' => 'required|max:60',
            'price' => 'required|numeric',
            'image'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
        ]);

        $img = $request->file('image');
        $imageName = time().$img->getClientOriginalName();

        $product = new Product();
        $product->category_id = $request->get('category'); 
        $product->name = $request->get('name');
        $product->extract = $request->get('extract');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->visible = $request->has('visible') ? 1 : 0;
        $product->image = $imageName;

        $request->image->move(public_path('images'), $imageName);

        $product->save();

        $message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        
        return redirect()->route('product.index')->with('message', $message);
    }


    public function show($id)
    {
        $product = Product::find($id);
        return $product;
       
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:40',
            'description' => 'required|max:255',
            'extract' => 'required|max:255',
            'price' => 'required|numeric',
            'image'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
        ]);

        
        $img = $request->file('image');
        $imageName = time().$img->getClientOriginalName();

        $product =  Product::find($id);
        $product->category_id = $request->get('category'); 
        $product->name = $request->get('name');
        $product->extract = $request->get('extract');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->visible = $request->has('visible') ? 1 : 0;
        $product->image = $imageName;

        $request->image->move(public_path('images'), $imageName);

        $updated = $product->save();
        



        $message = $updated ? 'Producto actualizado correctamente!' : 'El producto NO pudo actualizarse!';        
        return redirect()->route('product.index')->with('message', $message);

    }


    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $deleted = $product->delete();

        $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        return redirect()->route('product.index')->with('message', $message);

    }
}








































































