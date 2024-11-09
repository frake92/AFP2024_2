<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    protected $model = Food::class;

    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::factory(),
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2, 5, 50)
        ];
    }
}
