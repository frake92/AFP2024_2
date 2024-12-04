<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Food;

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

    public function addToCart(Food $food)
    {
        // Logika, amellyel hozzáadjuk az ételt a kosárhoz
        // Itt valósíthatod meg a kosár kezelését (session, adatbázis, stb.)
        session()->push('cart', $food); // Példa session alapú tárolásra

        return redirect()->route('cart'); // A kosár oldalon irányítjuk tovább
    }


    // Kosár ürítése
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('food.cart')->with('success', 'Kosár kiürítve.');
    }

    // Vásárlás logikája (egyszerűsített példa)
    public function checkout()
    {
        // Itt történhet a rendelés feldolgozása
        $cart = session()->get('cart', []);

        // Rendelés rögzítése, stb. ...

        // Kosár kiürítése a rendelés után
        session()->forget('cart');
        return redirect()->route('food.cart')->with('success', 'Rendelés sikeres!');
    }
}
