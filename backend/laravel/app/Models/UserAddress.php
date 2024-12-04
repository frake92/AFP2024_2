<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    public function register(Request $request)
{
    // Validate the registration and address fields
    $request->validate([
        'postal_code' => 'required|string',
        'city' => 'required|string',
        'street' => 'required|string',
        'house_number' => 'required|string',
    ]);

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Save the address
    UserAddress::create([
        'user_id' => $user->id,
        'postal_code' => $request->postal_code,
        'city' => $request->city,
        'street' => $request->street,
        'house_number' => $request->house_number,
    ]);

    return redirect()->route('home');  // or wherever you want to redirect
}

    use HasFactory;

    protected $table = 'user_addresses';

    protected $fillable = [
        'user_id',
        'postal_code',
        'city',
        'street',
        'house_number',
    ];

    // Egy cím egy felhasználóhoz tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
