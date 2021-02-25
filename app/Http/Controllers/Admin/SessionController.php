<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function viewCreate()
    {
        return view('admin.sessions.create');
    }

    public function create(Request $request)
    {
        Session::create([
            'poster_id' => $request->posterId,
            'date' => $request->date,
            'hall' => $request->hall,
            'places' => $request->places,
        ]);
        return redirect(route('admin.sessions'));
    }

    public function update($id, Request $request)
    {
        Session::find($id)->update([
            'poster_id' => $request->posterId,
            'date' => $request->date,
            'hall' => $request->hall,
            'places' => $request->places,
        ]);
        return redirect(route('admin.sessions'));
    }

    public function delete($id)
    {
        Session::find($id)->delete();
        return redirect(route('admin.sessions'));
    }

    public function viewAll()
    {
        return view('admin.sessions.sessions', ['sessions' => Session::with('poster')->get()]);
    }

    public function view($id)
    {
        $session = Session::find($id);
        $session->places = json_decode($session->places, true);
        return view('admin.sessions.session', ['session' => $session]);
    }
}
