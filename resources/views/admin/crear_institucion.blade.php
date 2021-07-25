@extends('admin.nav')
@section('title', 'Crear institucion')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-create_institucion') }}" method="POST">
          <h4 class="card-title"><u>Nueva institucion</u> </h4>

          {{csrf_field()}}

          <div class="form-group">
            <label>Nombre: </label>
            <input type="text" class="form-control form-control-line" name="institucion-nombre" minlength="4">
          </div>
          <div class="form-group">
            <label>Información de contacto: </label>
            <input type="text" class="form-control form-control-line" name="institucion-contacto">
            <small>Información como número de telefono, correo empresarial, etc.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Creado correctamente':'No se pudo crear la institucion'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><u>Instituciones registradas</u> </h4>

        <!-- INSTITUCIONES -->
        @foreach($insts as $i)
        <div class="card-title ">
          <h5>{{ ucfirst($i->nombre) }}</h5>
        </div>
        @endforeach
      </div> <!-- end institutions list -->
    </div>
  </div>
</div>

@endsection
