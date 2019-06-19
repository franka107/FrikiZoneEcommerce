<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Order_item;
use App\Comment;

class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
        //$items = Order::find( $request->get('order_id'))->order_items;
        //dd($items);   
        //dd($request->get('id_pedido'));
        
        
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function getItems(Request $request)
    {
        $items =Order::find($request->get('order_id'))->order_items;
        return json_encode( $items);
        
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $deleted = $order->delete();

        $message = $deleted ? 'Pedido Eliminado correctamente!' : 'El pedido no pudo Eliminarse!';

        return redirect()->route('order.index')->with('message', $message);
    }

    public function confirmOrder($id)
    {
        $order = Order::find($id);
        $order -> status = 'Entregado';
        $order->save();

        return redirect()->route('user.orders');
    }
}
