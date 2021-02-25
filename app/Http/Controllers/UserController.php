<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function viewProfile()
    {
        return view('profile');
    }

    public function updateProfile($id, Request $request)
    {
        User::find($id)->update([
            'email' => $request->email,
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
            'phone' => $request->phone,
            'born_data' => $request->born_data,
        ]);
        return redirect(route('profile'));
    }

    public function viewUpdateProfile()
    {
        return view('profileUpdate');
    }

    public function updatePassword($id, Request $request)
    {
        User::find($id)->update([
            'password' => Hash::make($request->password),
        ]);
    }
}
