<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('store.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        


        return view('store.show', compact('product'));
    }
    public function carrito()
    {
        return view('store.carrito');
    }
    public function pedido()
    {
        return view('store.pedido');
    }
}
