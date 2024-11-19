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
            'status' => fake()->randomElement(['pending', 'in_progress','completed', 'canceled']),
            'order_date' => fake()->dateTimeBetween('-1 month', 'now'),
            'comment' => fake()->paragraph()
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
