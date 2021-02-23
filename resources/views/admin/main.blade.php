<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <a class="nav-link text-white" href="{{route('home')}}">Site</a>
    <a class="nav-link text-white" href="{{route('logout')}}">Sign out</a>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/posters">Афиша</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/sessions">Сеансы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/users">Пользователи</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>

</body>
</html>
