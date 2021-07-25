@extends('admin.nav')
@section('title', 'Crear rol')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-create_rol') }}" method="POST">
          <h4 class="card-title"><u>Nuevo Rol</u> </h4>

          {{csrf_field()}}

          <div class="form-group">
            <label>Nombre: </label>
            <input type="text" class="form-control form-control-line" name="rol-nombre" minlength="4">
            <small>Solo se aceptan números y letras.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Creado correctamente':'No se pudo crear'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><u>Roles</u> </h4>

        <!-- ROL -->
        @foreach($roles as $r)
        <div class="card-title ">
          <h5>{{ $r->id." - ".ucfirst($r->nombre) }}</h5>
        </div>
        @endforeach
      </div> <!-- end roles list -->
    </div>
  </div>
</div>

@endsection
