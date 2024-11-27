<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurant::all();
        return view('restaurants.index', ['restaurants' => $restaurants]);
    }

    public function create() {
        return view('restaurants.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'address'       => 'required|string|max:255|unique:restaurants,address',
            'phone'         => 'required|string|max:20|unique:restaurants,phone',
            'description'   => 'nullable|string|max:500',
            'picture_path'  => 'nullable|string|max:255',
        ]);

        $newRestaurant = Restaurant::create($data);

        return redirect(route('restaurant.index'))->with('success', 'Étterem létrehozva!');
    }

    public function edit(Restaurant $restaurant) {
        return view('restaurants.edit', ['restaurant' => $restaurant]);
    }

    public function update(Restaurant $restaurant, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $restaurant->update($data);

        return redirect(route('restaurant.index'))->with('success', 'Sikeres étterem módosítás!');
    }

    public function destroy(Restaurant $restaurant) {
        $restaurant->delete();
        return redirect(route('restaurant.index'))->with('success', 'Sikeres étterem törlés!');
    }
}
