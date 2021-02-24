@extends('admin.main')
@section('title')
    Users
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Users</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Name</th>
                <th>Discount card</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->name.' '.$user->surname.' '.$user->middle_name}}</td>
                <td>{{$user->discount_card}}</td>
                <td><a href="{{route('admin.user', $user->id)}}">Edit</a></td>
                <td><a href="{{route('admin.user.delete', $user->id)}}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
