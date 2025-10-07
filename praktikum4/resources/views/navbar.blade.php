<nav>
    <ul>
        @auth
            <li>
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/buku') }}">Buku</a>
            </li>
            <li>
                <form action="{{ route('user.logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
            <li>
                <a href="{{ route('user.login') }}">Login</a>
            </li>
            <li>
                <a href="{{ route('user.register') }}">Register</a>
            </li>
        @endguest
    </ul>
</nav>
