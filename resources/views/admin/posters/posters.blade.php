@extends('admin.main')
@section('title')
    Постеры
@endsection
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Постеры</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="/admin/posters/create" class="btn btn-outline-secondary">Создать постер</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Жанр</th>
                <th>Старт показа</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posters as $poster)
            <tr>
                <td>{{$poster->id}}</td>
                <td>{{$poster->title}}</td>
                <td>{{$poster->genre}}</td>
                <td>{{$poster->start_date}}</td>
                <td><a href="{{route('view_admin_poster'), $poster->id}}">Редактировать</a></td>
                <td><a href="{{route('delete_admin_poster'), $poster->id}}">Удалить</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
