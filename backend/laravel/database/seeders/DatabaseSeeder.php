<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserAddress;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\UserCart;
use App\Models\Order;
use App\Models\CourierOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class
        ]);

        // Alapadat generáló

        // Generáljunk 10 user-t (3 futárt, 7 felhasználót)
        $couriers = User::factory()->count(3)->courier()->create();
        $users = User::factory()->count(7)->regularUser()->create();

        // Generáljunk minden userhez egy címet
        foreach ($couriers->merge($users) as $user) {
            UserAddress::factory()->create(['user_id' => $user->id]);
        }

        // Generáljunk 10 éttermet
        $restaurants = Restaurant::factory()->count(10)->create();

        // Generáljunk minden étteremhez 15 ételt
        foreach ($restaurants as $restaurant) {
            Food::factory()->count(15)->create(['restaurant_id' => $restaurant->id]);
        }

        // Generáljunk 5 userhez kosarat
        foreach ($users->random(5) as $user) {
            $cart = UserCart::factory()->create(['user_id' => $user->id]);

            // Adjunk 2-5 random ételt a kosárhoz
            $foods = Food::inRandomOrder()->take(rand(2, 5))->get();
            foreach ($foods as $food) {
                UserCart::factory()->create([
                    'user_id' => $user->id,
                    'food_id' => $food->id,
                ]);
            }
        }

        // 7. Generáljunk 5 ordert
        $orders = Order::factory()->count(5)->create();

        // 8. Generáljunk 2 futárhoz 1-2 courierOrder-t
        foreach ($couriers->random(2) as $courier) {
            CourierOrder::factory()->count(rand(1, 2))->create(['courier_id' => $courier->id]);
        }
    }
}
