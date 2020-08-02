@extends('templates.bg-image')

@section('css')
<style>
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
  .org-icon {
    filter: grayscale(0.4);
  }
  .main-title-desc {
    display: block;
  }
  .register-link {
    font-weight: 600;
    color: gray;
  }
  .register-link:hover {
    color: #86220f;
  }
  .card,
  .no-bg-color {
    background-color: unset;
  }
  .card .card-body,
  .card .card-header {
    background-color: #0003;
  }
  .footer,
  .topbar {
    background-color: #0008;
  }
  .main-card {
    margin-top: 6em;
    vertical-align: top;
  }
  .main-card .card-body {
    height: 100%;
  }
  .card {
    display: inline-block;
  }
  .card * {
    color: #aaa;
  }
  .main-card .card-body h2 {
    color: black;
    font-weight: bold;
    text-shadow: 2px 2px grey;
  }
  .card p {
    font-size: 1.2em;
    font-family: sans-serif;
  }
  .footer {
    color: white;
    position: relative;
    bottom: 0;
  }
  .module-list > h5 {
    padding-bottom: 7px;
  }

  @media (max-width: 767px){
    .topbar {
      position: relative;
    }
  }
</style>
@endsection

@section('content')
<!-- HEADER -->
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-light">
    <!-- Logo -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{asset('/material-pro/assets/images/logo.png')}}" alt="homepage" height="60px" class="org-icon" />
        <div class="title-container">
          <h4 class="main-title">ATIME</h2>
          <!-- <span class="main-title-desc">system</span> -->
        </div>
      </a>
    </div>

    <ul class="navbar-nav mr-auto mt-md-0"></ul> <!-- align right -->
    <!-- Home Links -->
    @if(Auth::user())
    <a class="register-link" href="{{route('intra')}}">Ingresar</a>
    @else
    <a class="register-link" href="{{route('login')}}">Iniciar sesion</a>
    <span style="width: 20px"></span>
    <a class="register-link" href="{{route('register')}}">Registrarse</a>
    @endif
  </nav>
</header>

<!-- CONTENT -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12" style="display: contents">
      <!-- card: system's info -->
      <div class="card col-md-7 main-card">
        <div class="card-body">
          <h2>Información</h2>
          <p>ATime es un sistema de control de evaluaciones que te permite obtener más que solo notas de las evaluaciones.</p>
          <br>
          <h2>Confianza</h2>
          <p>Contamos con la ayuda de expecialistas en pedagogia, estadistica y psicologia, para brindarte información útil y confiable.</p>
          <br>
          <h2>Simplicidad</h2>
          <p>El diseño de nuestro sistema está enfocado a ofrecerte las herramientas que necesitas de la forma más simple posible.</p>
        </div>
      </div>
      <!-- card: system's modules -->
      <div class="card col-md-4 main-card">
        <div class="card-body">
          <h5>Contamos con los siguientes modulos</h5><br>
          <div class="module-list">
            <h5><i class="fa fa-check text-info"></i> Evaluaciones online</h5>
            <h5><i class="fa fa-check text-info"></i> Repositorio</h5>
            <h5><i class="fa fa-check text-info"></i> Foro de ayuda anonima</h5>
            <h5><i class="fa fa-check text-info"></i> Repositorio de examenes</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="footer">
  Copyright © 2020 ATime's demo
  <small>| Desarrollado por HYAR7E</small>
</footer>
@endsection
