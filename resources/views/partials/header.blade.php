<header >
    <!-- top header -->
    <div class="top-header">
        <div class="top-header-container container">
            <span>DC POWER VISA <i class="fa-regular fa-registered"></i></span>
            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>

    <!-- header links -->
    <div class="header-links container">
        <!-- logo -->
        <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="logo" class="header-logo">
    <ul>
        <li>
        <a href="{{route('characters')}}">Characters</a>
        </li>
        <li>
            <a href="{{route('comics')}}">Comics</a>
        </li>
        <li>
            <a href="{{route('movies')}}">Movies</a>
        </li>
        <li>
            <a href="{{route('tv')}}">Tv</a>
        </li>
        <li>
            <a href="{{route('games')}}">Games</a>
        </li>
        <li>
            <a href="{{route('collectibles')}}">Collectibles</a>
        </li>
        <li>
            <a href="{{route('videos')}}">Videos</a>
        </li>
        <li>
            <a href="{{route('fans')}}">Fans</a>
        </li>
        <li>
            <a href="{{route('news')}}">News</a>
        </li>
        <li>
            <a href="{{route('shop')}}">Shop</a>
        </li>
    </ul>

     <!-- search bar -->
     <div class="input-group search-bar">
            <input class="form-control border-0 p-0" type="search" placeholder="Search" >
            <span class="input-group-append">
                <div class="input-group-text bg-transparent border-0 py-0 pe-0"><i class="fa fa-search"></i></div>
            </span>
        </div>
    </div>
    <div class="header-jumbo"></div>
</header>