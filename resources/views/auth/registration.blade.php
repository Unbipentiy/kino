@extends('main')

@section('content')

    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Send">
    </form>

@endsection
