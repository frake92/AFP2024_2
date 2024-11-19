<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    protected $model = Food::class;

    public function definition()
    {
        return [
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2, 5, 50),
            'picture_path' => 'images/foods/' . fake()->uuid() . '.jpg'
        ];
    }
}
