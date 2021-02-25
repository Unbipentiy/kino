<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">Kino</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if(Auth::check() && !Auth::user()->admin == 0)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}">Admin</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sessions')}}">Sessions</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" href="{{route('registration')}}">Sign Up</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" href="{{route('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                @endif

            </ul>
        </div>
    </nav>
</header>
