<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo" width="50" height="50">
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'nav-active' :''}}" href="{{route('comics')}}" aria-current="page">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'news' ? 'nav-active' :''}}" href="{{route('news')}}" aria-current="page">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'nav-active' :''}}" href="{{route('shop')}}" aria-current="page">Shop</a>
            </li>
            </ul>
        </div>

        <input class="form-control w-25" type="search" placeholder="Search">
    </div>
</header>