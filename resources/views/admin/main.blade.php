@extends('main')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.header')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('admin-content')
        </main>
    </div>
</div>
@endsection
