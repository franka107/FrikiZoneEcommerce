<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', []);
        //si no existe la variable de sesion carrito la creo y guarda un array vacio
    }

    // Show cart

    public function show()
    {
        $cart = \Session::get('cart');
        return view('store.cart', compact('cart'));

    }
    // Add item

    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product->quantity =1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Delete Item

    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        unset($cart['Recusandae ea']);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Update item

    public function update(Product $produt, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');

    }
    // trash cart
    public function trash(Product $product)
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
    // total
}
