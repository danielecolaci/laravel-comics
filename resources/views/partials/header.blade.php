<header class="navbar navbar-expand-lg oswald">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" width="50" height="50">
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() === 'comics' ? 'nav-active' : '' }}"
                        href="{{ route('comics') }}" aria-current="page">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() === 'news' ? 'nav-active' : '' }}" href="{{ route('news') }}"
                        aria-current="page">News</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() === 'shop' ? 'nav-active' : '' }}" href="{{ route('shop') }}"
                        aria-current="page">Shop</a>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="search" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>
<div class="jumbotron"></div>
