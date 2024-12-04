<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'cart_id',
        'address_id',
        'status',
        'order_date',
        'comment',
    ];

    // Egy rendelés egy felhasználóhoz tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Egy rendelés egy kosárhoz tartozik
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    
    


    // Egy rendelés egy címhez tartozik
    public function address()
    {
        return $this->belongsTo(UserAddress::class, 'address_id');
    }

    // Egy rendelést egy futár vehet fel
    public function courierOrders()
    {
        return $this->hasOne(CourierOrder::class);
    }
}
