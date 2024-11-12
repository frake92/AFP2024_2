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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $newRestaurant = Restaurant::create($data);

        return redirect(route('restaurant.index'));
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
