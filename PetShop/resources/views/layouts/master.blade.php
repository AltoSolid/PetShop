<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title',__('information.homePage'))</title>

    <!-- Styles -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  -->
    <!--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">            LOCAL -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">
    
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
         <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="navbar-nav mr-auto">
                        <!-- Future Left Side Links -->

                                <div class="navbar">
                                    <a class="navbar-brand" href="{{ route('home.index') }}">{{__('information.home')}}</a>
                            
                                     <a class="navbar-brand" href="{{ route('pet.show') }}">
                                    {{__('information.master.navBarButtons.showPets')}}
                                    </a>

                                    <a class="navbar-brand" href="{{ route('pet.create') }}">
                                    {{__('information.master.navBarButtons.newPet')}}
                                    </a>
                                    
                                    <a class="navbar-brand" href="{{ route('product.show') }}">
                                    {{__('information.master.navBarButtons.showProducts')}}
                                    </a>
                                
                                    <a class="navbar-brand" href="{{ route('product.create') }}">
                                    {{__('information.master.navBarButtons.createProduct')}}
                                    </a>

                                    <a class="navbar-brand" href="{{ route('meeting.show') }}">
                                    {{__('information.master.navBarButtons.showMeetings')}}
                                    </a>
                                
                                    <a class="navbar-brand" href="{{ route('meeting.create') }}">
                                    {{__('information.master.navBarButtons.createMeetings')}}
                                    </a>


                                </div>                
                            </ul>
                            <li class="nav-item">
                                
                                {{ Auth::user()->name }}
                                

                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">{{__('information.copyright')}}</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

<!-- Scripts -->
<script type="text/javascript">
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>

</html>