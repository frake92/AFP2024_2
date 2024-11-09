<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Food;
use App\Models\UserCart;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCartFactory extends Factory
{
    protected $model = UserCart::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'food_id' => Food::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
