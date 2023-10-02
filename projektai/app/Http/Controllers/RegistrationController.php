<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Walidacja danych
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        // Utworzenie nowego użytkownika
        $user = new User();
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->save();

        // Przekierowanie użytkownika po udanej rejestracji
        return redirect('/');
    }
}

