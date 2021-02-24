@extends('admin.main')
@section('title')
    Пользователи
@endsection
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Пользователи</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>ФИО</th>
                <th>Дисконтная карта</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->name.' '.$user->surname.' '.$user->middle_name}}</td>
                <td>{{$user->discount_card}}</td>
                <td><a href="{{route('admin_user', $user->id)}}">Редактировать</a></td>
                <td><a href="{{route('admin_user_delete', $user->id)}}">Удалить</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
