@extends('templates.nav')
@section('title', 'Detalle curso')

@section('css')
<style media="screen">
.no-horizontal-space {
  padding-left: 0px;
  padding-right: 0px;
  margin-left: 0px;
  margin-right: 0px;
}
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-4 col-md-12">
    <div class="card">
      <!-- COURSE INFO -->
      <div class="card-body">
        <div class="mt-4 text-center"> <img src="{{asset('/material-pro/assets/images/courses/'.$curso->nombre.'.jpg')}}" class="rounded-circle" width="150" height="150">
          <h4 class="card-title mt-2">{{ucfirst($curso->nombre)}}</h4>
          <div class="row text-center justify-content-md-center">
            <div class="col-7">
              <i class="fas fa-tasks"></i>&nbsp;
              <span class="font-medium">{{$curso->count_tests()}}</span>
              &nbsp;tests
            </div>
          </div>
        </div>
      </div>
      <!-- SEPARATOR -->
      <div><hr></div>
      <!-- PERFORMANCE -->
      <div class="card-body">
        <h4 class="card-title mt-2">Rendimiento promedio</h4>
      </div>
    </div>
  </div>

  <div class="col-lg-8 col-md-12">
    <div class="card card-body">
      <h4 class="card-title mt-2">Tests disponibles</h4>
      <!-- start: tests list -->
      @if($curso->count_tests() != 0)
        @foreach($curso->tests as $cxt)
        <hr>
        <h4 class="card-title">
          <a href="{{route('do-test', ['id' => $cxt->test->id])}}">{{ ucfirst($cxt->test->titulo) }}</a>
        </h4>
        <h6 class="card-subtitle">{{ucfirst($cxt->test->descripcion)}}</h6>
        <small>Veces realizado: {{ ucfirst($cxt->test->count_tries()) }}</small>
        <small>creado el {{ ucfirst($cxt->test->created_at) }}</small>
        @endforeach <!-- end tests list -->
      @else
        <span>No hay tests disponibles aún</span>
      @endif
    </div>
  </div>
</div>
@endsection
