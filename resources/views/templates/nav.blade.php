@extends('templates.html-stuff-material')

@section('t-css')
@yield('css')
<style media="screen">
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
    color: #b8860bbf;
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
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- User profile -->
      <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
        <!-- User profile image -->
        <div class="profile-img"> <img src="../assets/images/users/1.jpg" alt="user" /> </div>
        <!-- User profile text-->
        <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span class="caret"></span></a>
          <div class="dropdown-menu animated flipInY">
            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>
      </div>
      <!-- End User profile text-->
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <li class="nav-small-cap">PERSONAL</li>
          <li> <a href="starter-kit.html" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Starter Kit</span></a> </li>
          <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">With Dropdown</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="map-google.html">Google Maps</a></li>
              <li><a href="map-vector.html">Vector Maps</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="javascript:void(0)">item 1.1</a></li>
              <li><a href="javascript:void(0)">item 1.2</a></li>
              <li>
                <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                <ul aria-expanded="false" class="collapse">
                  <li><a href="javascript:void(0)">item 1.3.1</a></li>
                  <li><a href="javascript:void(0)">item 1.3.2</a></li>
                  <li><a href="javascript:void(0)">item 1.3.3</a></li>
                  <li><a href="javascript:void(0)">item 1.3.4</a></li>
                </ul>
              </li>
              <li><a href="#">item 1.4</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
      <!-- item-->
      <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
      <!-- item-->
      <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
      <!-- item-->
      <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
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
    <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
          <div class="d-flex mt-2 justify-content-end">
            <!-- align right -->
            <!-- <div class="d-flex mr-3 ml-2">
              <div class="chart-text mr-2">
                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                <h4 class="mt-0 text-info">$58,356</h4>
              </div>
              <div class="spark-chart"> <div id="monthchart"></div> </div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              This is some text within a card block.
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul id="themecolors" class="mt-3">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
              <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
              <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
              <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
              <li class="d-block mt-4"><b>With Dark sidebar</b></li>
              <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
              <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
            <ul class="mt-3 chatonline">
              <li><b>Chat option</b></li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="rounded-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="rounded-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="rounded-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="rounded-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="rounded-circle"> <span>Govinda Star <small class="text-success">online</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="rounded-circle"> <span>John Abraham<small class="text-success">online</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="rounded-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a> </li>
              <li> <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="rounded-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
      © 2019 Material Pro Admin by wrappixel.com
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
