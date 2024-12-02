<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []); // Kosár tartalom lekérése
        return view('cart', compact('cart')); // Kosár megjelenítése
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
