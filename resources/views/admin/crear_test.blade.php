@extends('templates.nav')
@section('title', 'Crear test')

@section('css')
<link href="{{asset('material-pro/assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
<script>
$('.select2').select2();
</script>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Creado correctamente':'No se pudo crear el test'}}</div>
        </div>
        <br>
        @endif

        <form class="" action="{{ route('ep_admin-create_test') }}" method="POST">
          <h4 class="card-title"><u>Nuevo Test</u> </h4>
          <h6 class="card-subtitle">No se permite el uso de caracteres especiales</h6>

          {{csrf_field()}}

          <div class="form-group">
            <label>Titulo: </label>
            <input type="text" class="form-control form-control-line" name="test-titulo" minlength="4">
          </div>
          <div class="form-group">
            <label>Descripcion: </label>
            <textarea type="text" class="form-control form-control-line" name="test-descripcion" minlength="4" rows="2"></textarea>
            <small>Ayuda a los alumnos a entender qué encontrarán en este test.</small>
          </div>
          <div class="form-group">
            <label>Tiempo limite: </label>
            <input type="time" class="form-control form-control-line" name="test-tiempo_limite" step="1">
            <small>Opcional: tiempo limite para resolver el test.</small>
          </div>

          <!-- SELECT 2 -->
          <div class="form-group">
            <label>Curso: </label>
            <select class="select2" style="width: 100%" multiple name="test-curso[]">
              @foreach($cursos as $c)
              <option value="{{$c->id}}">{{$c->nombre}}</option>
              @endforeach
            </select>
            <small>Puede seleccionar más de un curso.</small>
          </div>
          <div class="form-group">
            <label>Tema: </label>
            <select class="select2" style="width: 100%" multiple name="test-tema[]">
              @foreach($temas as $t)
              <option value="{{$t->id}}">{{$t->nombre}}</option>
              @endforeach
            </select>
            <small>Puede seleccionar más de un tema.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><u>Tests</u> </h4>

        <!-- TESTS -->
        @foreach($tests as $t)
        <div class="card-title ">
          <h5>{{ ucfirst($t->titulo) }}</h5>
        </div>
        @endforeach
      </div> <!-- end tests list -->
    </div>
  </div>
</div>

@endsection
