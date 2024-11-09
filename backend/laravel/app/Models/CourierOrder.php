<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'courier_id',
    ];

    // Egy futár rendelés egy rendeléshez tartozik
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Egy futár rendelés egy futárhoz (felhasználóhoz) tartozik
    public function courier()
    {
        return $this->belongsTo(User::class, 'courier_id');
    }
}
