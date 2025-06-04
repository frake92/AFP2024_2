<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function regisztralas(Request $request): RedirectResponse
{
    $data = $request->validate([
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'phone' => 'required|unique:users,phone',
        'postal_code' => 'required',
        'city' => 'required',
        'street' => 'required',
        'house_number' => 'required',
    ]);

    $data['password'] = bcrypt($data['password']);
    $defaultRoleId = 3;

    // Create the user
    $newUser = User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'password' => $data['password'],
        'phone' => $data['phone'],
        'role_id' => $defaultRoleId
    ]);

    // Store the user's address in the user_addresses table
    $newUser->addresses()->create([
        'user_id' => $newUser->id, // Add the user_id here
        'postal_code' => $data['postal_code'],
        'city' => $data['city'],
        'street' => $data['street'],
        'house_number' => $data['house_number'],
    ]);


    return redirect(route('belepes'));
}




    public function belepes(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role_id == 1) {
                return redirect()->route('WelcomeAdmin');
            } elseif ($user->role_id == 2) {
                return redirect()->route('futar');
            } else {
                return redirect()->route('loggedin');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



    public function edit(User $user) {
        return view('profil', ['user' => $user]);
    }

    public function update(Request $request)
{
    $user = Auth::user();
    $data = $request->validate([
        'first_name' => 'required|string|min:3',
        'last_name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'required|unique:users,phone,' . $user->id,
        'password' => 'nullable|confirmed|min:8',
        'postal_code' => 'required',
        'city' => 'required',
        'street' => 'required',
        'house_number' => 'required',
    ]);

    $user->first_name = $data['first_name'];
    $user->last_name = $data['last_name'];
    $user->email = $data['email'];
    $user->phone = $data['phone'];

    if (!$request->filled('password')) {
        unset($data['password']);
    } else {
        $data['password'] = bcrypt($data['password']);
    }

    // Update user
    $user->update($data);

    // Update or create the user's address
    $user->address()->updateOrCreate([
        'user_id' => $user->id
    ], [
        'postal_code' => $data['postal_code'],
        'city' => $data['city'],
        'street' => $data['street'],
        'house_number' => $data['house_number']
    ]);

    return redirect()->back()->with('success', 'Profil sikeresen frissítve!');
}





    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
