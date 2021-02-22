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
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
            'admin' => $request->phone,
            'born_data' => $request->born_data,
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
