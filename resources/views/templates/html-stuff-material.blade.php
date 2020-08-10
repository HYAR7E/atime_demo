<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('t-title', "INTRANET")</title>
  <!-- META -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Neldo Agustín Falcón">
  <!-- STYLES -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('material-pro/assets/images/icono.ico') }}">
  <link rel="canonical" href="{{ route('intra') }}"/>
  <link href="{{asset('material-pro/material/css/style.css') }}" rel="stylesheet">
  <link href="{{asset('material-pro/material/css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
  <!-- CUSTOM STYLES -->
  @yield('t-css')
  <!-- JAVASCRIPT -->
  <script src="{{ asset('/material-pro/assets/plugins/jquery/jquery.min.js')}}"></script>
</head>

<body class="card-no-border {{$hiddennav??''}}">
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

  <script src="{{ asset('/material-pro/assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('/material-pro/assets/plugins/popper/popper.min.js')}}"></script>
  <script src="{{ asset('/material-pro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="{{ asset('/material-pro/material/js/jquery.slimscroll.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('/material-pro/material/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('/material-pro/material/js/sidebarmenu.js')}}"></script>
  <!--stickey kit -->
  <script src="{{ asset('/material-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
  <script src="{{ asset('/material-pro/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{ asset('/material-pro/material/js/custom.min.js')}}"></script>
  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="{{ asset('/material-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
  <!-- JS FILES -->
  @yield('t-js-el')
  <!-- CUSTOM JS -->
  <script>
  $(document).ready(function(){
    @yield('t-js-code')
  })
  </script>
</body>

</html>
