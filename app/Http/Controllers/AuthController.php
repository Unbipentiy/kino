<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration(Request $request){
        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
        ]);

    }
    public function viewRegistration(){
        return view('registration');
    }

    public function login(){

    }

    public function viewLogin(){
        return view('login');
    }
}
