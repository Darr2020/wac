<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    @yield('datePickers')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <!-- Sidebar  -->
            @if (\Request::is('login') || \Request::is('register'))
                         
                @else
                <nav id="sidebar">           
                    <ul class="list-unstyled components">
                        <div class="text-center">
                            <img src="{{asset('img/img.jpg')}}" class="img-sidebar" alt="...">
                        </div>
                        <li class="{{ Request::is('panel') ? 'liActive' : '' }}">
                            <a href="{{route('influencers.index')}}">Panel</a>
                        </li>                        
                        <li>
                            <a href="#">Notificaciones</a>
                        </li>
                        <li class="{{ Request::is('mis-recursos') ? 'liActive' : '' }}">
                            <a href="{{route('influencers.create')}}">Mis recursos</a>
                        </li>
                        <li>
                            <a href="#">Propuestas</a>
                        </li>
                        <li>
                            <a href="#">Compensar</a>
                        </li>
                        <li>
                            <a href="#">Cuenta</a>
                        </li>
                    </ul>
                </nav>
            @endif
            <!-- Page Content  -->
            <div id="content">
        
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        @if (\Request::is('login') || \Request::is('register'))    
                            
                            @else                
                                <a type="button" id="sidebarCollapse">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <span class="nav-link">Créditos ganados: 2000</span>
                                <span class="nav-link">Créditos disponibles: 1000</span>
                        @endif
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                @guest                                
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Inicia sesión</a>
                                        </li>
                                    @endif                            
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                                        </li>
                                    @endif
                                @else  
                                    <li class="nav-item dropdown">
                                        
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <img src="{{asset('img/img.jpg')}}" class="img-navbar" alt="...">
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Cerrar sesión 
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
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
        </div>       
    </div> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{asset('plugins/flatpickr.js')}}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('js/custom-bs-maxlength.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    @yield('scripts')
    
</body>
</html>
