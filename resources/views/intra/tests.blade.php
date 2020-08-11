@extends('templates.nav')
@section('title', 'Rendimiento')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <!-- TESTS LIST -->
        <h2 class="card-title mt-2">{{count($tests)}} tests disponibles</h2>
        <!-- start: tests list -->
        @if(count($tests) != 0)
          @foreach($tests as $t)
            <hr>
            <h4 class="card-title">
              <a href="{{route('do-test', ['id' => $t->id])}}">{{ ucfirst($t->titulo) }}</a>
            </h4>
            <h6 class="card-subtitle">{{ucfirst($t->descripcion)}}</h6>
            <small>Veces realizado: {{ ucfirst($t->count_tries()) }}</small> |
            <small>Publicado el {{ ucfirst($t->updated_at) }}</small>

            <div class="">
              <small class="text-muted pt-4">Tags: </small>
              @foreach($t->temas as $txt)
              <span class="badge badge-info">{{$txt->tema->nombre}}</span>
              @endforeach
              @foreach($t->cursos as $cxt)
              <span class="badge badge-info">{{$cxt->curso->nombre}}</span>
              @endforeach
            </div>
          @endforeach <!-- end tests list -->
        @else
          <span>No hay tests disponibles aún</span>
        @endif

      </div>
    </div>
  </div>
</div>
@endsection
