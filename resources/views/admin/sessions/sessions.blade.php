@extends('admin.main')
@section('title')
    Sessions
@endsection
@section('admin-content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Sessions</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="/admin/sessions/create" class="btn btn-outline-secondary">Create session</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Time</th>
                <th>Hall</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
