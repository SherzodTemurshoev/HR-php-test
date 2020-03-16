<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;

class OrderProduct extends Controller
{
    public function index()
    {
    	$query = DB::table('orders')
    		->join('partners', 'orders.partner_id', '=', 'partners.id')
    		->join('order_products', 'orders.id', '=', 'order_products.order_id')
    		->select('orders.id', 'orders.status', 'partners.name', 'order_products.price')
    		->get();

    	return view('order.index', compact('query'));
    }

    public function edit($id)
    {
    	$order = Order::findOrFail($id);
    	return view('order.edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'email'			=>	'required|email',
    		'name_partner'	=>	'required',
    	//	'name_product'	=>	'required',
    		'status'		=>	'required',
    		'price'			=>	'required',
    	]);

    	$order = Order::findOrFail($id);
    	DB::table('orders')->where('id', $order->id)
    		->update(['client_email' => $request->email, 'status' => $request->status]);
    	DB::table('partners')->where('id', $order->partner_id)->
    		update(['name' => $request->name_partner]);
    	DB::table('order_products')->where('order_id', $order->id)
    		->update(['price' => $request->price]);

    	return redirect()->route('orders.index');
    }
}
