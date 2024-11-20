<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserAddress;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\CourierOrder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Alap Seeder-ek meghívása
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);

        // Generáljunk 3 futárt és 7 normál felhasználót
        $couriers = User::factory()->count(3)->courier()->create();
        $users = User::factory()->count(7)->regularUser()->create();

        // Minden userhez generáljunk egy címet
        $couriers->merge($users)->each(function ($user) {
            UserAddress::factory()->create([
                'user_id' => $user->id,
            ]);
        });

        // Generáljunk 10 éttermet
        $restaurants = Restaurant::factory()->count(10)->create();

        // Minden étteremhez 5-15 ételt generálunk
        $restaurants->each(function ($restaurant) {
            Food::factory()->count(rand(5, 15))->create([
                'restaurant_id' => $restaurant->id,
            ]);
        });

        // Véletlenszerűen 5 felhasználónak hozzunk létre kosarat
        $users->random(5)->each(function ($user) {
            // Kosárhoz adjunk 2-5 véletlenszerű ételt
            $foods = Food::inRandomOrder()->take(rand(2, 5))->get();

            $cart = Cart::factory()->create([
                'user_id' => $user->id,
            ]);

            $foods->each(function ($food) use ($cart) {
                CartItem::factory()->create([
                    'cart_id' => $cart->id,
                    'food_id' => $food->id,
                ]);
            });
        });

        // Generáljunk 5 rendelést meglévő kosarak alapján
        Cart::inRandomOrder()->take(5)->get()->each(function ($cart) {
            Order::factory()->pending()->create([
                'user_id' => $cart->user_id,
                'cart_id' => $cart->id
            ]);
        });

        // Véletlenszerűen 3 rendeléshez rendeljünk futárt
        Order::inRandomOrder()->take(3)->get()->each(function ($order) use ($couriers) {
            CourierOrder::factory()->create([
                'order_id' => $order->id,
                'courier_id' => $couriers->random()->id,
            ]);
        });
    }
}
