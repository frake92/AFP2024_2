<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    
    protected $table = 'restaurants';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'description',
        'picture_path',
    ];


    // Egy étteremhez több étel is tartozhat
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
