@extends('templates.html-stuff-material')

@section('t-title')
@yield('title', 'Intranet')
@endsection

@section('t-css')
@yield('css')
<style media="screen">
  body { zoom: 1.1; } /* Fix page zoom */

  .title-container {
    display: inline-block;
    text-align: left;
    line-height: normal;
    /* vertical-align: bottom; */
    vertical-align: middle;
  }
  .main-title {
    display: inline-block;
    font-weight: bold;
    font-size: 1.4em;
    color: black;
  }
  .profile-text {
    padding-top: 0px!important;
    font-size: 1.3em;
  }
  .padding-top-30 {
    padding-top: 30px;
  }
</style>
@endsection

@section('t-content')
<div id="main-wrapper">
  <!-- ============================================================== -->
  <!-- Topbar header - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
          <!-- Logo icon -->
          <b>
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <img src="{{asset('/material-pro/assets/images/logo.png')}}" alt="homepage" height="50px" class="dark-logo" />
            <!-- Light Logo icon -->
            <img src="{{asset('/material-pro/assets/images/logo.png')}}" alt="homepage" height="50px" class="light-logo" />
          </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span style="">
            <div class="title-container">
              <h4 class="main-title">ATIME</h2>
            </div>
          </span>
        </a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav mr-auto mt-md-0">
          <!-- This is  -->
          <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
          <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-md-block text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <aside class="left-sidebar">
    <!-- User profile -->
    <div class="user-profile">
      <!-- User profile image -->
      <!-- <div class="profile-img"> <img src="../assets/images/users/1.jpg" alt="user" /> </div> -->
      <!-- User profile text-->
      <div class="profile-text">
        <a href="{{route('profile', [Auth::user()->id])}}">
          {{Auth::user()->nickname." - ".Auth::user()->institucion->nombre}}
        </a>
      </div>
    </div>
    <!-- End User profile text-->
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-small-cap">Paginas</li>
        <li>
          <a href="{{route('av-test')}}" aria-expanded="false"><i class="fas fa-tasks"></i><span class="hide-menu"> Tests</span></a>
        </li>
        <li>
          <a href="{{route('course')}}" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Cursos</span></a>
        </li>
        <li>
          <a href="{{route('performance')}}" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu"> Rendimiento</span></a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
    <!-- Bottom points-->
    <div class="sidebar-footer">
      <!-- settings -->
      <a href="{{route('config')}}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
      @if(Auth::user()->rol_id==1) <!-- admin-->
      <a href="{{route('admin-rule')}}" class="link" data-toggle="tooltip" title="Admin"><i class="fas fa-user-secret"></i></a>
      @endif
      <!-- logout -->
      <a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
  </aside>
  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid padding-top-30">
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      @yield('content')
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
      © 2020 ATime's demo
      <small>| Desarrollado por HYAR7E</small>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
</div>
@endsection
