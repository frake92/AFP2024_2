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
            'user_id' => \App\Models\User::factory(), // Létrehoz egy új felhasználót, és azt rendeli hozzá
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'street' => $this->faker->streetName,
            'house_number' => $this->faker->buildingNumber,
        ];
    }
}
