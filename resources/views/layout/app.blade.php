<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','DC Comics')</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        <header>
            <div class="header_container">
                <div class="header_first container">
                    <ul class="first_menu py-2">
                        <li class="px-5">DC POWER&trade; VISA&reg;</li>
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
                            @foreach (config('comics.navLink') as $link)
                            <li class="text-uppercase font-weight-bold"><a href="{{'/'.$link['plural']}}" class="{{Route::currentRouteName() === $link['plural'] || Route::currentRouteName() === $link['single'] ? 'active' : ''}}">{{$link['plural']}}</a><li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="search_bar col pr-0">
                        <input class="search_input" type="search" name="" id="">
                        <div class="search_icons">
                            <span class="font-weight-bold">Search</span>
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="jumbo"></div>
        </header>

        <main id="main_content">
            @yield('content')
        </main>

        <footer>
            <div class="topfooter_container">
                <div class="container">
                    <div class="row">
                        <div class="half_conteiner col-5 py-4">
                            @foreach (config('comics.footerLink') as $link)
                            <div @if ($loop->last) class="margin_negative col-4 px-0" @endif class="col-4 px-0">
                                <h5 class="">{{$link['title']}}</h5>
                                <ul class="px-0">
                                    @foreach ($link['links'] as $item)
                                    <li><a href="">{{$item}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                            <div>
                                <p class="my-0">All Site Content TM and &reg; 2021 DC Entertaiment, unless otherwise <a href="#">noted here.</a> All rights reserved. <a href="">Cookies Settings</a></p>
                            </div>
                        </div>
                        <div class="half_conteiner col-7 dx_top">
                            <img class="ml-auto" src="{{asset('img/dc-logo-bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomfooter_container">
                <div class="container">
                    <button class="sign_up">SIGN-UP NOW!</button>
                    <div class="footer_icons col-4">
                        <span>FOLLOW US</span>
                        @foreach (config('comics.footerIcons') as $icon)
                        <a href=""><img src="{{$icon}}" alt=""></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </footer>
        
    </body>

</html>