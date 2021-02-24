<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">Kino</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Сеансы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sessions')}}">Афиша</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('registration')}}">Зарегистрироваться</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
