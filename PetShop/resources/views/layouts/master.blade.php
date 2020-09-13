<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title','Home Page PetShop')</title>

    <!-- Styles -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  -->
    <!--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">            LOCAL -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">
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

                    <ul class="navbar-nav mr-auto">
                        <!-- Future Left Side Links -->

                        <div class="navbar">
                            <a class="navbar-brand" href="{{ route('home.index') }}">Home</a>
                            
                            <a class="navbar-brand" href="{{ route('pet.show') }}">
                            Show pets
                            </a>

                            <a class="navbar-brand" href="{{ route('pet.create') }}">
                            New pet
                            </a>
                            
                            <a class="navbar-brand" href="{{ route('product.show') }}">
                            Show products
                            </a>
                        
                            <a class="navbar-brand" href="{{ route('product.create') }}">
                            Create product
                            </a>

                            <a class="navbar-brand" href="{{ route('meeting.show') }}">
                            Show meetings
                            </a>
                        
                            <a class="navbar-brand" href="{{ route('meeting.create') }}">
                            Create meeting
                            </a>

                            <a class="navbar-brand" href="{{route('home.contact') }}">
                            Contact
                            </a>    
                       </div>                
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!-- Scripts -->
<script type="text/javascript">
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>

</html>