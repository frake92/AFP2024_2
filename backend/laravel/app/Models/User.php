<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'phone',
        'role_id',
    ];

    // Egy felhasználónak egy szerepköre lehet
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Egy felhasználónak egy címe lehet
    public function addresses()
    {
        return $this->belongsTo(UserAddress::class);
    }
    public function address()
    {
    return $this->hasOne(UserAddress::class); // Assuming your address model is UserAddress
    }

    public function cart()
    {
    return $this->hasOne(Cart::class);
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
