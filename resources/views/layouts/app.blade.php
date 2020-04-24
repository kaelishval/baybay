<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}


    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> --}}
    
    
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
        </style>
</head>
<body>
    {{-- <header>
        <div class="navbar-fixed">
            <nav>
                <ul id="userdropdown" class="dropdown-content">
                    <li><a href="#!"></a></li>
                </ul>
                <div class="nav-wrapper">
                    <ul class="left">
                        <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="side-nav">
            <li><a href="/studenthome"><i class="material-icons">person</i> Student Side</a></li>
            <li><a href="/employeehome"><i class="material-icons">person</i> Employee Side</a></li>
            <li><a href="/classhome"><i class="material-icons">person</i>Create Class</a></li>
        </ul>
    </header> --}}
    <main>
        <div class="row">
            <div class="col s12">
                @yield('content')
            </div>
        </div>
    </main>
    {{-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <script>
        $('.button-collapse').show();
        $('.button-collapse').sideNav();
        $('.side-nav').sideNav();
    </script> --}}
</body>
</html>
