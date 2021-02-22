<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateProfile($id, Request  $request){
        User::find($id)->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
            'admin' => $request->admin,
            'phone' => $request->phone,
            'born_data' => $request->born_data,
        ]);
        return redirect(route('profile'));
    }
}
