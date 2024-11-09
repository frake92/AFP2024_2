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
            'restaurant_id' => \App\Models\Restaurant::factory(), // Létrehoz egy új éttermet, és azt rendeli hozzá
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 50), // Ár 5.00 és 50.00 között
        ];
    }
}
