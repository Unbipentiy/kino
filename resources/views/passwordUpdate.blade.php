@extends('main')
@section('title')
    Личный кабинет
@endsection
@section('content')
    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h2">Profile update</h1>
                </div>
                <form action="/update-password" class="form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="" class="form-control" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>
    </main>
@endsection
