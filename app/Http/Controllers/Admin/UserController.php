<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function update($id, Request $request)
    {
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

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect(route('home'));
    }

    public function viewAll()
    {
        return view('admin.users.users', ['users' => User::all()]);
    }

    public function view($id)
    {
        return view('admin.users.users', ['user' => User::find($id)]);
    }
}
