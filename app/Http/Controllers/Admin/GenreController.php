<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create(Request $request)
    {
        Genre::create([
            'name' => $request->name,
        ]);
        return redirect(route('admin_posters'));
    }

    public function update($id, Request $request)
    {
        Genre::find($id)->update([
            'name' => $request->name,
        ]);
        return redirect(route('admin'));
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
        return redirect(route('admin'));
    }

    public function view($id)
    {
        return view('admin.genres.genres', ['genres' => Genre::find($id)]);
    }

    public function viewAll()
    {
        Genre::all();
        return view('admin.genres.genres', ['genres' => Genre::all()]);
    }
}
