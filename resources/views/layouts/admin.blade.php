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

        <nav class="navbar navbar-dark stick-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">BOOLPRESS</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
            data-target="#sidebarMenu" data-toggle="collapse" aria-controls="sidebarMenu" aria-expanded="false"
             aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-light">
              <div class="container-fluid">
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
        
   
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            @yield('content')   
            {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h3">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"></button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        this week
                    </button>
                </div>
            </div>
     

        <canvas class="my-4 w-100" id="myChart" width="800" height="200"></canvas> --}}

        {{-- <h1>title</h1>
        <table class="table table-striped table-sm"> --}}
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

        </main>  
    </div>
</body>
</html>   

b5

    