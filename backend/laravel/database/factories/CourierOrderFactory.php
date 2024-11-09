<?php

namespace Database\Factories;

use App\Models\CourierOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourierOrderFactory extends Factory
{
    protected $model = CourierOrder::class;

    public function definition()
    {
        return [
            'order_id' => \App\Models\Order::factory(),
            'courier_id' => \App\Models\User::factory(), // Gondoskodj róla, hogy a courier_id egy futárt jelentsen
        ];
    }
}
