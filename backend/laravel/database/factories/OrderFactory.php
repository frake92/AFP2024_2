<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'cart_id' => \App\Models\UserCart::factory(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'order_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
