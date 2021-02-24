@extends('admin.main')
@section('title')
    Posters
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Posters</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{route('admin.poster.create.view')}}" class="btn btn-outline-secondary">Create poster</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Start date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posters as $poster)
            <tr>
                <td>{{$poster->id}}</td>
                <td>{{$poster->title}}</td>
                <td>{{$poster->genre}}</td>
                <td>{{$poster->start_date}}</td>
                <td><a href="{{route('admin.poster', $poster->id)}}">Edit</a></td>
                <td><a href="{{route('admin.poster.delete', $poster->id)}}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
