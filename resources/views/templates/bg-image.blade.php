@extends('templates.html-stuff-horizontal')

@section('t-css')
<style>
  /* background-image
  .background-image {
    position: fixed;
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100vw; height: 100%;
    background-image: url(https://i0.wp.com/www.1lockers.net/wp-content/uploads/2019/12/Cthulhu.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position-x: center;
    filter: hue-rotate(0deg);
  }
  */
  .fake-div-container {
    position: relative;
  }
</style>
@yield('css')
@endsection

@section('t-js-code')
let time = 0;
setInterval(() => {
  time += 10;
  $(document.body).find(".background-image")[0].style.filter = `hue-rotate(${time}deg)`
}, 50)
@yield('js-code')
@endsection

@section('t-content')
<div class="background-image"></div> <!-- background image -->
<div class="fake-div-container">
  @yield('content')
</div> <!-- end fake div container -->
@endsection
