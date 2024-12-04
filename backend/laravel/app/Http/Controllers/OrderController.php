<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::where('user_id', auth()->id())->with('items.food')->get();
    return view('orders.index', compact('orders'));
}

public function show($orderId)
{
    $order = Order::findOrFail($orderId);
    return view('orders.show', compact('order'));
}












    
}
