<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Global stylesheets -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{url('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/pages/login_validation.js')}}"></script>
    <!-- /theme JS files -->
</head>
<body class="login-container login-cover">
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

            <div class="container">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
