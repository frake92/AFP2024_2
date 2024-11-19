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
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
