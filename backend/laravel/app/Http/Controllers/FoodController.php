<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; // Food modell importálása
use App\Models\Restaurant; // Az étterem modell importálása
use App\Models\CartItem;
use App\Models\Cart;

class FoodController extends Controller
{
    public function create()
{
    $restaurants = Restaurant::all(); // Az összes étterem lekérése
    return view('food.create', compact('restaurants'));
}

// Controller



public function addToCart($foodId)
    {
        $user = auth()->user();

        // Ensure the user has a cart
        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);

        // Add food to cart
        CartItem::create([
            'cart_id' => $cart->id,
            'food_id' => $foodId,
        ]);

        return back()->with('success', 'Étel hozzáadva a kosárhoz!');
    }




public function index(Request $request)
{
    $restaurantId = $request->query('restaurant_id');

    if ($restaurantId) {
        $selectedRestaurant = Restaurant::with('foods')->find($restaurantId);
        $restaurants = Restaurant::all();

        return view('food.index', compact('selectedRestaurant', 'restaurants'));
    }

    return redirect()->route('restaurant.index')->with('error', 'Étterem nincs kiválasztva.');
}



public function store(Request $request)
{
    // Validáció
    $data = $request->validate([
        'name'        => 'required|string|max:255',
        'price'       => 'required|numeric',
        'description' => 'nullable|string|max:500',
        'restaurant_id' => 'required|exists:restaurants,id', // Validáljuk az étterem ID-jét
        'picture_path' => 'nullable|url', // URL validálása
    ]);

    // Étel létrehozása
    Food::create([
        'name' => $data['name'],
        'price' => $data['price'],
        'description' => $data['description'],
        'restaurant_id' => $data['restaurant_id'], // Az étterem ID-jének hozzárendelése
        'picture_path' => $data['picture_path'], // Kép URL elmentése
    ]);

    return redirect()->route('restaurant.index')->with('success', 'Étel sikeresen hozzáadva!');
}







}
