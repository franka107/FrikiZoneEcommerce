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
        //$user= \Auth::id();
        //dd($user);
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart', compact('cart', 'total'));

    }
    // Add item

    public function add($id)
    {
        $product = Product::find($id);
        $cart = \Session::get('cart');
        $product->quantity =1;
        $cart[$product->id] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    public function addReady($id)
    {
        $product = Product::find($id);
        $cart = \Session::get('cart');
        $product->quantity =1;
        $cart[$product->id] = $product;
        \Session::put('cart', $cart);

        return view('store.showmodal', compact('product'));
    }
    // Delete Item

    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->id]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Update item

    public function update(Product $product, $quantity)
    {
    	$cart = \Session::get('cart');
    	$cart[$product->id]->quantity = $quantity;
    	\Session::put('cart', $cart);
    	return redirect()->route('cart-show');
    }
    // trash cart
    public function trash(Product $product)
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
    // total

    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;

        foreach($cart as $item)
        {
            $total += $item->price * $item->quantity;
        }

        return $total;
    }

    public function orderDetail()
    {
        if (count(\Session::get('cart')) <= 0)
        {
            return redirect()->route('home');
        }
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }
}
