<header class="container">
    <img src="{{asset('images/dc-logo.png')}}" alt="DC Logo">
    <ul>
        <li><a class="{{Request::route()->getName() == 'homepage'?'active':''}}" href="{{route('homepage')}}">HOMEPAGE</a></li>
        <li><a class="{{Request::route()->getName() == 'shop'?'active':''}}" href="{{route('shop')}}">SHOP</a></li>
        <li><a class="{{Request::route()->getName() == 'tv'?'active':''}}" href="{{route('tv')}}">TV</a></li>
        <li><a class="{{Request::route()->getName() == 'movies'?'active':''}}" href="{{route('movies')}}">MOVIES</a></li>
        <li><a href="#">GAMES</a></li>
        <li><a href="#">NEWS</a></li>
    </ul>
</header>