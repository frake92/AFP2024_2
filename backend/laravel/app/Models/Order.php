<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'status',
        'order_date',
    ];

    // Egy rendelés egy felhasználóhoz tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Egy rendelés egy kosárhoz tartozik
    public function cart()
    {
        return $this->belongsTo(UserCart::class);
    }

    // Egy rendelést több futár is felvehet
    public function courierOrders()
    {
        return $this->hasMany(CourierOrder::class);
    }
}
