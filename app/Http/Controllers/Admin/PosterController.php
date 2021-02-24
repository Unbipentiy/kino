<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
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
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(public_path('/img'), time().'_'.$f->getClientOriginalName());
                File::create([
                    'name' => $f->getClientOriginalName(),
                    'entity_type' => 'poster',
                    'entity_id' => $request->id,//?
                ]);
            }
        }
        File::create([
            'entity_type' => 'poster',
            'entity_id' => $request->id,//?
        ]);
        return redirect(route('admin_posters'));
    }

    public function update($id, Request $request)
    {
        Poster::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->startDate,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'country' => $request->country,
        ]);
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
