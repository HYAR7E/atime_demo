@extends('admin.nav')
@section('title', 'Crear curso')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-create_curso') }}" method="POST">
          <h4 class="card-title"><u>Nuevo Curso</u> </h4>

          {{csrf_field()}}

          <div class="form-group">
            <label>Nombre: </label>
            <input type="text" class="form-control form-control-line" name="curso-nombre" minlength="4">
            <small>Solo se aceptan números, letras y guión.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Creado correctamente':'No se pudo crear el curso'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><u>Cursos</u> </h4>

        <!-- CURSOS -->
        @foreach($cursos as $c)
        <div class="card-title ">
          <h5>{{ ucfirst($c->nombre) }}</h5>
        </div>
        @endforeach
      </div> <!-- end courses list -->
    </div>
  </div>
</div>

@endsection
