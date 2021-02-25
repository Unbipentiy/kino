@extends('admin.main')
@section('title')
    {{'Session '.$session->title}}
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Edit session {{$session->title}}</h1>
    </div>
    <form action="{{ route('admin.session.update', $session->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{$session->poster_id}}" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{$session->hall}}</textarea>
        </div>
        <div class="form-group">
            <label for="startDate">Start date</label>
            <input type="datetime" class="form-control" value="{{$session->date}}" name="startDate">
        </div>
        <div class="places">
            @for($y = 1; $y<=10; $y++)
                <div class="places-y">
                    <p>{{$y}}</p>
                    @for($x = 1; $x<=20; $x++)
                        @if($session->places[strval($x)][strval($y)] == 1)
                            <div class="place"></div>
                        @else
                            <div class="place"></div>
                        @endif
                    @endfor
                    <p>{{$y}}</p>
                </div>
            @endfor
        </div>
        <input type="submit" class="btn btn-primary" value="Edit">
    </form>

@endsection
