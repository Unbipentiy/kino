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
                <form action="{{route('update.profile')}}" class="form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{Auth::user()->email}}" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="{{Auth::user()->name}}" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" value="{{Auth::user()->surname}}" class="form-control" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle name</label>
                        <input type="text" value="{{Auth::user()->middle_name}}" class="form-control" name="middle_name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" value="{{Auth::user()->phone}}" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="born_data">Born data</label>
                        <input type="date" value="{{Auth::user()->born_data}}" class="form-control" name="born_data">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>
    </main>
@endsection
