<!DOCTYPE html>
<html>
    <head>
        <title>GDI</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/sidebar.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/sidebar.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/mystyle.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/sidebar-themes.css')}}" rel="stylesheet">
        <!--Custom Font-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
                integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!-- Datatables -->

        @yield('stylesheets')
    </head>
    <body>
        <header>
            <nav class="navbar justify-content-between">
                <div class="row">
                    <div class="form-inline">
                        <a href="{{ route('homepage') }}" class="navbar-brand"><span class="hidden-xs" style="color: black; text-align: center;">Home</span></a>
                        <a href="{{ route('home.flickr') }}" class="navbar-brand"><span class="hidden-xs" style="color: black; text-align: center;">Flickr</span></a>
                    </div>
                </div>
                <div class="row">
                    <a href="{{ route('login') }}" class="navbar-brand"><span class="hidden-xs" style="color: black; text-align: center;">Login</span></a>
                    <a href="{{ route('register-user') }}" class="navbar-brand"><span class="hidden-xs" style="color: black; text-align: center;">Register</span></a>
                </div>
            </nav>
            
        </header>

        <div>
            @yield('content')
        </div>

        <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap-material-design.min.js')}}"></script>

        <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>

        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('assets/js/bootstrap-4-navbar.js')}}"></script>

        <script src="{{ asset('assets/js/bootstrap-dropdownhover.min.js')}}"></script>

        <script src="{{ asset('assets/js/sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/material-dashboard.js?v=2.1.2') }}"></script>
        @yield('scripts')
    </body>
</html>
