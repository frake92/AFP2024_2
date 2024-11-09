<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\UserCart;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'cart_id' => UserCart::factory(),
            'status' => fake()->randomElement(['pending', 'completed', 'canceled']),
            'order_date' => fake()->dateTimeBetween('-1 month', 'now')
        ];
    }

    public function pending()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'pending',
            ];
        });
    }

    public function completed()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'completed',
            ];
        });
    }

    public function canceled()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'canceled',
            ];
        });
    }
}
