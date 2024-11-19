<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    // Egy kosár egy felhasználóhoz tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Egy kosárba több étel is szerepelhet
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
