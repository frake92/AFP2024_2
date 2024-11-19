<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'food_id',
    ];

    // Egy a kosárban tárolt étel csak egy kosárhoz tartozhat
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Egy a kosárban tárolt étel csak egy ételhez tartozhat
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
