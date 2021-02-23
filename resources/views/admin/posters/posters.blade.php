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
            <tr>
                <td>1,001</td>
                <td>Motherfucker</td>
                <td>10.01.1915</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="#">Удалить</a></td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>Fatherfucker</td>
                <td>10.01.1916</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="#">Удалить</a></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
