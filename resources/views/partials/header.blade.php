<header>
    <header class="container d-flex">
        <a href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo_header">
        </a>
        <nav>
            <ul class="d-flex">
                <li><a class="nav_link" href="#">characters</a></li>
                <li><a class="nav_link" {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}
                        href="{{ route('comics.index') }}">comics</a></li>
                <li><a class="nav_link" href="#">movies</a></li>
                <li><a class="nav_link" href="#">tv</a></li>
                <li><a class="nav_link" href="#">games</a></li>
                <li><a class="nav_link" href="#">collectibles</a></li>
                <li><a class="nav_link" href="#">videos</a></li>
                <li><a class="nav_link" href="#">fans</a></li>
                <li><a class="nav_link" href="#">news</a></li>
                <li><a class="nav_link" href="#">shop</a></li>
            </ul>
        </nav>
    </header>
</header>
