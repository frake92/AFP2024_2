<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierOrder extends Model
{
    use HasFactory;

    protected $table = 'courier_orders';

    protected $fillable = [
        'order_id',
        'courier_id',
    ];

    // Egy futár által felvett rendelés egy rendeléshez tartozik
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Egy futár által felvett rendelés egy futárhoz tartozik
    public function courier()
    {
        return $this->belongsTo(User::class, 'courier_id');
    }
}
