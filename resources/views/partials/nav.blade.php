
<nav>
    <ul>
        <li class=" {{setActive('home')}}"><a href="/">Home</a></li>
        <li class="{{setActive('about')}}"><a href="/about">About</a></li>
        <li class="{{setActive('contact')}}"><a href="/contact">Contacto</a></li>
        <li class="{{setActive('projects.*')}}"><a href="/projects">Portfolio</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li><a class="dropdown-item" href="#"
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
