<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','DC Comics')</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        <header>
            <div class="header_container">
                <div class="header_first container">
                    <ul class="first_menu py-2">
                        <li class="px-5">DC POWER VISA</li>
                        <li>ADDICTIONAL DC SITES</li>
                    </ul>
                </div>
            </div>
            <div class="nav_container row">
                <nav class="header_nav container">
                    <a class="col" href="{{route('home')}}">
                        <img src="{{asset('img/dc-logo.png')}}" alt="">
                    </a>
                    <div class="nav_link col-8">
                        <ul class="p-0 mb-0">
                            <li class="text-uppercase font-weight-bold"><a href="">characters</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">comics</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">movies</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">tv</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">games</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">collectibles</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">videos</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">fans</a></li>
                            <li class="text-uppercase font-weight-bold"><a href="">news</a></li>
                            <li class="text-uppercase font-weight-bold"><span><a href="">shop</a></span></li>
                        </ul>
                    </div>
                    <div class="search_bar col pr-0">
                        <input class="search_input" type="search" name="" id="">
                        <div class="search_icons">
                            <span>Search</span>
                            <i>O</i>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        
    </body>

</html>