@extends('admin.nav')
@section('title', 'Administrar tests')

@section('css')
<style media="screen">
.zoom-out {
  zoom: 0.9;
}
</style>
@endsection

@section('content')
<div class="row zoom-out">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Publicado correctamente':'No se pudo publicar el test, verifique que tenga al menos una pregunta'}}</div>
          <br>
        </div>
        @endif

        <h4 class="card-title">Tests</h4>
        <h6 class="card-subtitle">{{count($tests)}} registros</h6>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Cantidad de preguntas</th>
                <th>Autor</th>
                <th>Cursos</th>
                <th>Temas</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tests as $t)
              <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->titulo}}</td>
                <td>{{$t->descripcion}}</td>
                <td>{{$t->count_q()}}</td>
                <td>{{$t->autor->nickname}}</td>
                <td>
                  @foreach($t->cursos as $cxt)
                  <span class="badge badge-info">{{$cxt->curso->nombre}}</span>
                  @endforeach
                </td>
                <td>
                  @foreach($t->temas as $txt)
                  <span class="badge badge-info">{{$txt->tema->nombre}}</span>
                  @endforeach
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
