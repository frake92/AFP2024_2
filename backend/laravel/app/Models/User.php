<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'phone',
        'role_id',
    ];

    // Egy felhasználónak egy szerepe van
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Egy felhasználónak több címe lehet
    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    // Egy felhasználónak több kosara lehet
    public function carts()
    {
        return $this->hasMany(UserCart::class);
    }

    // Egy felhasználónak több rendelése lehet
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Egy felhasználó lehet futár több rendelésnél
    public function courierOrders()
    {
        return $this->hasMany(CourierOrder::class, 'courier_id');
    }
}
