@extends('main')
@section('title')
    Личный кабинет
@endsection
@section('content')
    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h2">Profile</h1>
                </div>
                <p>Your name: {{Auth::user()->name.' '.Auth::user()->surname.' '.Auth::user()->middle_name}}</p>
                <div class="btn-group">
                    <a href="{{route('update.profile')}}" class="btn btn-outline-primary">Edit profile</a>
                    <a href="{{route('update.password')}}" class="btn btn-outline-primary">Edit password</a>
                </div>
            </div>
        </div>
    </main>
@endsection
