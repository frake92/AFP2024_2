<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    protected $model = UserAddress::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'postal_code' => fake()->postcode(),
            'city' => fake()->city(),
            'street' => fake()->streetName(),
            'house_number' => fake()->buildingNumber()
        ];
    }
}
