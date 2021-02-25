@extends('admin.main')
@section('title')
    {{$user->name.' '.$user->surname.' '.$user->middle_name}}
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">User {{$user->name.' '.$user->surname.' '.$user->middle_name}}</h1>
    </div>
    <form action="{{ route('admin.user.update', $user->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$user->name}}" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" value="{{$user->surname}}" name="surname">
        </div>
        <div class="form-group">
            <label for="middle_name">Middle name</label>
            <input type="text" class="form-control" value="{{$user->middle_name}}" name="middle_name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" value="{{$user->email}}" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" value="{{$user->password}}" name="password">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" value="{{$user->phone}}" name="phone">
        </div>
        <div class="form-group">
            <label for="born_data">Born date</label>
            <input type="text" class="form-control" value="{{$user->born_data}}" name="born_data">
        </div>
        <div class="form-group">
            <label for="admin">Admin:</label>
            <input type="hidden" value="0" name="admin">
            <input type="checkbox" value="1" @if ($user->admin == 1)checked="checked"@endif name="admin">
        </div>
        <input type="submit" class="btn btn-primary" value="Edit">
    </form>

@endsection
