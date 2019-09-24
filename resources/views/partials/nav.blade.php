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
            <li class="nav-item"><a class="dropdown-item nav-link" href="#"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
        @endguest
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
