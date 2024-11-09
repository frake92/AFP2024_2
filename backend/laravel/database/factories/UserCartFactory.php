<?php

namespace Database\Factories;

use App\Models\UserCart;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCartFactory extends Factory
{
    protected $model = UserCart::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'food_id' => \App\Models\Food::factory(),
        ];
    }
}
