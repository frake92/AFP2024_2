<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;


class CartController extends Controller
{
    public function index()
    {
        // Get the user's cart and its items with associated food
        $cart = auth()->user()->cart;
        $cartItems = $cart ? $cart->items()->with('food')->get() : [];

        return view('cart', compact('cartItems'));
    }


    // Kosár megjelenítése
public function showCart()
{
    return view('cart');
}



public function removeItem($itemId)
{
    // Find the cart item by ID
    $cartItem = CartItem::findOrFail($itemId);

    // Delete the item from the cart
    $cartItem->delete();

    // Redirect back to the cart page with a success message
    return redirect()->route('cart.index')->with('success', 'Item removed from the cart.');
}


// Vásárlás logikája (egyszerűsített példa)
public function checkout()
{
    $user = auth()->user();
    $cartItems = $user->cart->items; // Fetch cart items for the logged-in user
    $totalAmount = $cartItems->sum(function ($item) {
        return $item->food->price; // Calculate total amount from cart items
    });

    return view('checkout', compact('cartItems', 'totalAmount'));
}

}
