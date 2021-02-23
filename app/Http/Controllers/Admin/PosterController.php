<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poster;
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
            'genre' => $request->genre,
            'country' => $request->country,
        ]);
        return redirect(route('admin_posters'));
    }

    public function update($id, Request $request)
    {
        $poster = Poster::find($id);
        $poster->title = $request->title;
        $poster->description = $request->description;
        $poster->start_date = $request->startDate;
        $poster->duration = $request->duration;
        $poster->genre = $request->genre;
        $poster->country = $request->country;
//        Poster::find($id)->update([
//            'title' => $request->title,
//            'description' => $request->description,
//            'start_date' => $request->startDate,
//            'duration' => $request->duration,
//            'genre' => $request->genre,
//            'country' => $request->country,
//        ]);
        $poster->save();
        return redirect(route('admin_posters'));
    }

    public function delete($id)
    {
        Poster::find($id)->delete();
        return redirect(route('admin_posters'));
    }

    public function viewAll()
    {
        return view('admin.posters.posters', ['posters' => Poster::all()]);
    }

    public function view($id)
    {
        return view('admin.posters.poster', ['poster' => Poster::find($id)]);
    }
}
