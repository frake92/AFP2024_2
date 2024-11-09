<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'role_id' => fake()->numberBetween(1, 3),
            'created_at' => now()
        ];
    }

    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => 1,
            ];
        });
    }

    public function courier()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => 2,
            ];
        });
    }

    public function regularUser()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => 3,
            ];
        });
    }
}
