@extends('main')
@section('title')
    Регистрация
@endsection
@section('content')
<main class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                <h1 class="h2">Регистрация</h1>
            </div>
            <form action="/login" class="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname">
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle name</label>
                    <input type="text" name="middle_name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone">
                </div>
                <input type="submit" class="btn btn-primary" value="Send">
            </form>
        </div>
    </div>
</main>
@endsection
