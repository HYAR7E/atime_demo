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
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-edit_test', ['id' => $test->id]) }}" method="POST">
          <h4 class="card-title"><u>Editar Test</u> </h4>
          <h6 class="card-subtitle">No se permite el uso de caracteres especiales</h6>

          {{csrf_field()}}

          <div class="form-group">
            <label>Titulo: </label>
            <input type="text" class="form-control form-control-line" name="test-titulo" minlength="4" value="{{$test->titulo}}">
          </div>
          <div class="form-group">
            <label>Descripcion: </label>
            <textarea type="text" class="form-control form-control-line" name="test-descripcion" minlength="4" rows="2">{{$test->descripcion}}</textarea>
            <small>Ayuda a los alumnos a entender qué encontrarán en este test.</small>
          </div>
          <div class="form-group">
            <label>Tiempo limite: </label>
            <input type="time" class="form-control form-control-line" name="test-tiempo_limite" value="{{$test->tiempo_limite}}">
            <small>Opcional: tiempo limite para resolver el test.</small>
          </div>

          <!-- SELECT 2 -->
          <div class="form-group">
            <label>Curso: </label>
            <select class="select2" style="width: 100%" multiple name="test-curso[]">
              @foreach($cursos as $c)
              <option value="{{$c->id}}" {{in_array($c->id, $test_cursos)?"selected":""}}>{{$c->nombre}}</option>
              @endforeach
            </select>
            <small>Puede seleccionar más de un curso.</small>
          </div>
          <div class="form-group">
            <label>Tema: </label>
            <select class="select2" style="width: 100%" multiple name="test-tema[]">
              @foreach($temas as $t)
              <option value="{{$t->id}}" {{in_array($t->id, $test_temas)?"selected":""}}>{{$t->nombre}}</option>
              @endforeach
            </select>
            <small>Puede seleccionar más de un tema.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Guardar cambios</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Guardado correctamente':'No se pudo editar el test'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
