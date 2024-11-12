<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\CourierOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourierOrderFactory extends Factory
{
    protected $model = CourierOrder::class;

    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'courier_id' => User::factory()->courier()
        ];
    }
}
