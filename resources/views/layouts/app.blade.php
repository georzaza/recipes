<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Recipes') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav me-auto">
                            <!-- Authentication Links -->
                        <li class="nav-item ms-lg-1">
                            <a class="nav-link rounded-circle {{ (Route::getCurrentRoute()->uri == '/') ? 'text-warning bg-dark' : '' }}" href="{{ url('/') }}"> {{ 'Explore' }} </a>
                        </li>
                        <li class="nav-item ms-lg-1">
                            <a class="nav-link rounded-circle {{(Route::getCurrentRoute()->uri == 'home') ? 'text-warning bg-dark' : '' }}" href="{{ url('/home') }}"> {{ 'Dashboard' }} </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ms-lg-1">
                                    <a class="nav-link rounded-circle {{(Route::getCurrentRoute()->uri == 'login') ? 'text-warning bg-dark' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ms-lg-1">
                                    <a class="nav-link rounded-circle {{(Route::getCurrentRoute()->uri == 'register') ? 'text-warning bg-dark' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ms-lg-1">
                                <a class="nav-link rounded-circle {{(Route::getCurrentRoute()->uri == 'myproducts') ? 'text-warning bg-dark' : '' }}" href="{{ url('/') }}"> {{ 'Products' }} </a>
                            </li>
                            <li class="nav-item ms-lg-1">
                                <a class="nav-link rounded-circle {{(Route::getCurrentRoute()->uri == 'myrecipes') ? 'text-warning bg-dark' : '' }}" href="{{ url('/') }}"> {{ 'Recipes' }} </a>
                            </li>
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <!-- Dropdown Items -->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="#">Edit Profile</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
