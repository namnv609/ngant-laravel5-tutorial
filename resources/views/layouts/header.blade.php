<nav id="navbar navbar-fixed-top navbar-inverse">
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li>
                <a href="{{ url('/auth/login') }}">Login</a>
            </li>
        @else
            <li>
                <a href="{{ url('/auth/logout') }}">Logout</a>
            </li>
        @endif
        </ul>
</nav>
