<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'restaurant_id',
        'name',
        'price',
        'picture_path',
    ];

    // Egy étel egy étteremhez tartozik
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // Egy étel több kosárban is szerepelhet
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
