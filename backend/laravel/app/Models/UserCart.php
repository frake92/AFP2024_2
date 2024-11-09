<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'food_id',
    ];

    // Egy kosár egy felhasználóhoz tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Egy kosár egy ételt tartalmaz
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
