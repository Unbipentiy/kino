<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/jquery-3.5.1.min.js" defer></script>
    <script src="/js/bootstrap.min.js" defer></script>
    <script src="/js/popper.min.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
    @include('header')
    <main class="content">
        @yield('content')
    </main>
    <footer class="footer text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#header">Back to top</a>
            </p>
        </div>
    </footer>
</div>
</body>
</html>
