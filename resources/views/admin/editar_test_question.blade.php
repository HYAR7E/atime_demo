@extends('templates.nav')
@section('title', 'Agregar pregunta')

@section('css')
<link href="{{asset('material-pro/assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
<style media="screen">
  .inline {
    display: inline-block;
  }
  .vertical-top {
    vertical-align: top;
  }
  .no-horizontal-space {
    padding-left: 0px;
    padding-right: 0px;
    margin-left: 0px;
    margin-right: 0px;
  }
  .hidden {
    display: none;
  }
</style>
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
@endsection

@section('js-code')
$('.select2').select2();
// Cambio en "cerrada"
$('#radio-cerrada')[0].onchange = () => {
  // Quitar clase
  $('#pregunta_cerrada_div')[0].classList.remove('hidden');
}
$('#radio-abierta')[0].onchange = () => {
  // Quitar clase
  $('#pregunta_cerrada_div')[0].classList.add('hidden');
}
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('ep_admin-edit_test_question', ['id' => $test->id]) }}" method="POST">
          <h4 class="card-title"><u>Agregar pregunta al examen:</u> <b>{{$test->titulo}}</b> </h4>
          <h6 class="card-subtitle">No se permite el uso de caracteres especiales</h6>
          {{csrf_field()}}

          <div class="form-group">
            <label>Texto: </label>
            <textarea type="text" class="form-control form-control-line" name="q-texto" minlength="4" rows="2"></textarea>
          </div>
          <div class="form-group col-lg-6 inline no-horizontal-space">
            <label>Tiempo limite: </label>
            <input type="time" class="form-control form-control-line" name="q-tiempo_limite" step="1" value="00:01:30">
            <small><b>Opcional</b>  tiempo limite para resolver la pregunta.</small>
            <small>Solo funciona si se establece un orden imperativo al resolver el examen.</small>
          </div>
          <div class="form-group inline col-lg-5 vertical-top">
            <label class="control-label">Tipo de pregunta</label>
            <div class="mb-2">
              <label class="custom-control custom-radio">
                <input name="q-tipo" type="radio" class="custom-control-input" id="radio-cerrada" value="1">
                <span class="custom-control-label">Cerrada</span>
              </label>
              <label class="custom-control custom-radio">
                <input name="q-tipo" type="radio" class="custom-control-input" id="radio-abierta" value="2" checked>
                <span class="custom-control-label">Abierta</span>
              </label>
            </div>
          </div>

          <div id="pregunta_cerrada_div" class="hidden">
            <h3 class="p-2 rounded-title">Pregunta cerrada</h3>
            <div class="form-group">
              <label class="control-label">Alternativa 1</label>
              <input type="text" class="form-control form-control-line" name="q-alternativa_1">
            </div>
            <div class="form-group">
              <label class="control-label">Alternativa 2</label>
              <input type="text" class="form-control form-control-line" name="q-alternativa_2">
            </div>
            <div class="form-group">
              <label class="control-label">Alternativa 3</label>
              <input type="text" class="form-control form-control-line" name="q-alternativa_3">
            </div>
            <div class="form-group">
              <label class="control-label">Alternativa 4</label>
              <input type="text" class="form-control form-control-line" name="q-alternativa_4">
            </div>
            <div class="form-group">
              <label class="control-label">Alternativa 5</label>
              <input type="text" class="form-control form-control-line" name="q-alternativa_5">
            </div>
            <hr>
          </div>
          <div class="form-group">
            <label class="control-label">Respuesta</label>
            <input type="text" class="form-control form-control-line" name="q-respuesta" minlength="1">
            <small>Sea lo más claro y generico posible para evitar problemas al comparar respuestas.</small>
          </div>

          <div class="form-group">
            <label>Tema: </label>
            <select class="select2" style="width: 100%" name="q-tema">
              @foreach($temas as $t)
              <option value="{{$t->id}}">{{$t->nombre}}</option>
              @endforeach
            </select>
            <small>Seleccione el tema en el que encaje mejor la pregunta.</small>
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Guardar cambios</button>
        </form> <!-- end form -->
        <br>
        @if(isset($msg))
        <div class="message {{$msg ? 'has-success':'has-danger'}}">
          <div class="form-control-feedback">{{$msg ? 'Guardado correctamente':'No se pudo agregar la pregunta'}}</div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
