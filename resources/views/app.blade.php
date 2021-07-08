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
                        <li>DC POWER VISA</li>
                        <li>ADDICTIONAL DC SITES</li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        
    </body>

</html>