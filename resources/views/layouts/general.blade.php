<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="author" content="ASTROCLOUD">
    <meta name="description" content="SIMONCER APPLICATION - DASHBOARD">
    <title>Leadership Dashboard - @yield('title')</title>
    <!-- Logo icon -->
    <link rel="icon" href="{{ asset('assets/static/logo/icon-base.png') }}">

    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/dist/css/custome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bar_menu.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('css')

  </head>
  <body>
    <div class="page">
        @include('layouts.sidebar')
        @include('layouts.header')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="page-body">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>
    <script src="{{asset('assets/dist/js/sidebar.js')}}"></script>

    @yield('js')
  </body>
</html>
