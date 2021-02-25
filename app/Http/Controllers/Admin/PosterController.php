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
        $poster = Poster::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->startDate,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'country' => $request->country,
        ]);
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(public_path('/files/posters/img'), time() . '_' . $f->getClientOriginalName());
                File::create([
                    'name' => time() . '_' . $f->getClientOriginalName(),
                    'entity_type' => 'App\Models\Poster',
                    'entity_id' => $poster->id,
                ]);
            }
        }
        return redirect(route('admin.posters'));
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
        return redirect(route('admin.posters'));
    }

    public function picture_delete($poster, File $file){
        \Illuminate\Support\Facades\File::delete('/files/posters/img'. $file->name);
        $file->delete();
        return redirect(route('admin.poster', $poster));
    }

    public function delete($id)
    {
        Poster::find($id)->delete();
        $files = File::where('entity_id', $id)->where('entity_type', 'App\Models\Poster');
        foreach ($files as $file) {
            \Illuminate\Support\Facades\File::delete('/files/posters/img'. $file->name);
        }
        $files->delete();
        return redirect(route('admin.posters'));
    }

    public function viewAll()
    {
        return view('admin.posters.posters', ['posters' => Poster::all()]);
    }

    public function view($id)
    {
        $poster = Poster::find($id);
        return view('admin.posters.poster', ['poster' => $poster, 'files' => $poster->files]);
    }
}
