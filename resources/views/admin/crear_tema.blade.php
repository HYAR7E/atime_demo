@extends('admin.nav')
@section('title', 'Crear tema')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-create_tema') }}" method="POST">
          <h4 class="card-title"><u>Nuevo Tema</u> </h4>

          {{csrf_field()}}

          <div class="form-group">
            <label>Nombre: </label>
            <input type="text" class="form-control form-control-line" name="tema-nombre" minlength="4">
            <small>Solo se aceptan números, letras y guión.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Creado correctamente':'No se pudo crear el tema'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><u>Temas</u> </h4>

        <!-- TEMAS -->
        @foreach($temas as $t)
        <div class="card-title ">
          <h5>{{ ucfirst($t->nombre) }}</h5>
        </div>
        @endforeach
      </div> <!-- end topics list -->
    </div>
  </div>
</div>

@endsection
