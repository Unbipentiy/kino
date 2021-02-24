@extends('admin.main')
@section('title')
    Sessions
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Sessions</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="/admin/sessions/create" class="btn btn-outline-secondary">Create session</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Poster</th>
                <th>Time</th>
                <th>Hall</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $session)
            <tr>
                <td>{{$session->id}}</td>
                <td>{{$session->poster->title}}</td>
                <td>{{$session->date}}</td>
                <td>{{$session->hall}}</td>
                <td><a href="{{route('admin.session', $session->id)}}">Edit</a></td>
                <td><a href="{{route('admin.session.delete', $session->id)}}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
