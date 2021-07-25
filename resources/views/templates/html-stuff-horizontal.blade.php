<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>@yield('t-title', "ATIME'S DEMO")</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Neldo Agustín Falcón">
    <!-- STYLES -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('material-pro/assets/images/icono.ico') }}">
    <link rel="canonical" href="{{ route('index') }}"/>
    <link href="{{asset('material-pro/horizontal/css/style.css') }}" rel="stylesheet">
    <!-- CUSTOM STYLES -->
    @yield('t-css')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('/material-pro/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- JS FILES -->
    @yield('t-js-el')
    <!-- CUSTOM JS -->
    <script>
      $(document).ready(function(){
        @yield('t-js-code')
      })
    </script>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
    </div>

    <!-- CONTENT -->
    <div class="root-container" id="main-root">
      @yield('t-content')
    </div>
  </body>
  <!-- <script src="{{asset('js/app.js')}}"></script> -->
  <script src="{{asset('material-pro/horizontal/js/custom.min.js')}}"></script> <!-- controls loader -->
</html>
