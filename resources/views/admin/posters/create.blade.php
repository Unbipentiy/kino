@extends('admin.main')
@section('title')
    Создание постера
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Создание постера</h1>
    </div>
    <form action="{{route('admin.poster.create')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="startDate">Start date</label>
            <input type="date" class="form-control" name="startDate">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" name="duration">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" name="genre">
        </div>
        <div class="form-group">
            <label for="file[]">Photos</label>
            <input type="file" class="form-control" multiple name="file[]">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country">
        </div>
        <input type="submit" class="btn btn-primary" value="Send">
    </form>

@endsection
