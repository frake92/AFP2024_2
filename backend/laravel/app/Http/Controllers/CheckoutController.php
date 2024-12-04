<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CartItem; 
use App\Models\Order; 
use Auth; 

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
{
    $user = auth()->user();
    
    $order = new Order();
    $order->user_id = $user->id;
    $order->cart_id = $user->cart->id; 
    $order->address_id = $user->address->id; 
    $order->status = 'pending';
    $order->order_date = now();
    $order->comment = $request->input('comment', ''); 
    $order->save();
    
    $user->cart->items()->delete();

    return redirect()->route('welcome')->with('success', 'Rendelés sikeresen leadva!');
}
}
