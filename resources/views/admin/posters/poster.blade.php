@extends('admin.main')
@section('title')
    {{'Poster '.$poster->title}}
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Edit poster {{$poster->title}}</h1>
    </div>
    <form action="{{ route('admin.poster.update', $poster->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{$poster->title}}" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{$poster->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="startDate">Start date</label>
            <input type="date" class="form-control" value="{{$poster->start_date}}" name="startDate">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" value="{{$poster->duration}}" name="duration">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" value="{{$poster->genre}}" name="genre">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" value="{{$poster->country}}" name="country">
        </div>
        <div class="form-group">
            @foreach($files as $file)
                <img src="/files/posters/img/{{$file->name}}"class="img-thumbnail" width="550px" alt="{{$file->name}}">
                <a href="{{route('admin.poster.picture_delete', $file->id)}}">Delete picture</a>
            @endforeach
        </div>
        <input type="submit" class="btn btn-primary" value="Edit">
    </form>

@endsection
