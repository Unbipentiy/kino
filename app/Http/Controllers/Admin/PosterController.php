<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poster;
use App\Models\User;
use Illuminate\Http\Request;

class PosterController extends Controller
{



    public function viewCreate()
    {
        return view('admin.posters.create');
    }

    public function create(Request $request)
    {
        Poster::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->startDate,
            'duration' => $request->duration,
            'genre_id' => $request->genreId,
            'country' => $request->country,
        ]);
        return redirect(route('admin_posters'));
    }

    public function viewUpdate()
    {
        return view('admin.posters.update');
    }

    public function update($id, Request $request)
    {
        User::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->startDate,
            'duration' => $request->duration,
            'genre_id' => $request->genreId,
            'country' => $request->country,
        ]);
        return redirect(route('admin_posters'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect(route('admin_posters'));
    }


}
