<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
            'phone' => $request->phone,
            'born_data' => $request->born_data,
            'discount_card' => rand(1000, 9999),
        ]);
        return redirect(route('login'));
    }

    public function viewRegistration()
    {
        return view('auth.registration');
    }

    public function login(Request $request)
    {
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect(route('profile'));
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
