<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'first_name' => 'Admin',
            'last_name' => 'Administrator',
            'phone' => null,
            'role_id' => 1
        ]);
    }
}
