<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">Navbar</a>

                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <!---SX-->
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/') }}">{{__('Home')}} </a>
                        </li>
                    </ul>

                    <!--DX-->
                    <ul class="navbar-nav ml-auto">
                         <!--Autentication links-->
                         @guest
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{__('login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{__('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">
                          <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                          </a>
                    

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard')}}">{{__('Dashboard')}}</a>
                                    <a class="dropdown-item" href="{{ url('profile')}}">{{__('Profile')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();">
                                        {{__('Logout') }}
                                    </a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
        </nav>
        
        <main class="">
            @yield('contant')
            
        </main>

    </div>
</body>
</html>    
    