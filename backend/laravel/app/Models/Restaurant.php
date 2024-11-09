<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'description',
    ];

    // Egy étteremhez több étel is tartozhat
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}