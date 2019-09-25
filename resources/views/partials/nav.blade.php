<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{setActive('home')}}" href="/">Home</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{setActive('about')}}" href="/about">About</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{setActive('contact')}}" href="/contact">Contacto</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{setActive('projects.*')}}" href="/projects">Portfolio</a>
        </li>
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        @else
            @if(auth()->user()->hasRoles(['admin','estudiante']))
                <li class="nav-item">
                    <a href="{{ route('usuarios.index') }}" class="nav-link">
                        Usuarios
                    </a>
                </li>
            @endif
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button"
                       id="dropdownMenuButton" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->roles[0]->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/logout"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Cerrar sesion
                        </a>
                    </div>
                </div>
            </li>
        @endguest
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
