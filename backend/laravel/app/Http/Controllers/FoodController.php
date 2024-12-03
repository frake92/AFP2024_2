<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; // Food modell importálása
use App\Models\Restaurant; // Az étterem modell importálása

class FoodController extends Controller
{
    public function create()
    {
        $restaurants = Restaurant::all(); // Az összes étterem lekérése
        return view('food.create', compact('restaurants'));
    }

    public function index(Request $request)
    {
        $restaurants = Restaurant::all();
        $selectedRestaurant = null;

        if ($request->has('restaurant_id') && $request->restaurant_id) {
            $selectedRestaurant = Restaurant::with('foods')->find($request->restaurant_id);
        }

        return view('food.index', [
            'restaurants' => $restaurants,
            'selectedRestaurant' => $selectedRestaurant,
        ]);
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
