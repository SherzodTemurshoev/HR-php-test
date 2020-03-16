<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
