<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GDI | @yield('title')</title>

    @include('backend.layout.stylesheets')

    @yield('stylesheets')
</head>
<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled show">
            @include('backend.layout.header')
            @include('backend.layout.sidebar')      
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <!-- Landing Banner -->
            @yield('content')
        </main>
        @include('backend.layout.footer')
    </div>

    @include('backend.layout.scripts')
	
    @yield('scripts')

    <script>
    </script>

</body>
</html>