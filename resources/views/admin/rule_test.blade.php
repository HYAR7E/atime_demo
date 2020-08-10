@extends('admin.nav')
@section('title', 'Administrar tests')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tests</h4>
        <h6 class="card-subtitle">{{count($tests)}} registros</h6>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Tiempo limite</th>
                <th>Autor</th>
                <th>Cursos</th>
                <th>Temas</th>
                <th>Publicar</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($tests as $t)
              <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->titulo}}</td>
                <td>{{$t->descripcion}}</td>
                <td>{{$t->tiempo_limite}}</td>
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
                <td>
                  @if($t->publicado)
                  <span class="badge badge-primary">Publicado</span>
                  @else
                  <form class="" action="{{route('ep_admin-publish_test')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="test-id" value="{{$t->id}}">
                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-outline-primary">Publicar</button>
                  </form>
                  @endif
                </td>
                <td>
                  <div class="btn-group">
                    <button type="submit" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only"></span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('admin-edit_test_question', ['id' => $t->id])}}">Agregar pregunta</a>
                      <a class="dropdown-item" href="{{route('admin-preview_test', ['id' => $t->id])}}">Previsualizar</a>
                    </div>
                  </div>
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
