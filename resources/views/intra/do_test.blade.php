@extends('templates.nav')
@section('title', 'Resolver test')

@section('css')
<link href="{{asset('material-pro/assets/plugins/wizard/steps.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/wizard/jquery.steps.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/wizard/jquery.validate.min.js')}}"></script>
<script>
// Initialize step.js wizard
let form = $(".tab-wizard").show();
let __timer__ = Array({{$test->count_q()}});
let wizard = $(".tab-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    next: "Siguiente",
    previous: "Anterior",
    finish: "Terminar",
    cancel: "Cancelar",
    current: "Pregunta N°: ",
    pagination: "Paginacion",
    loading: "Cargando ..."
  },
  transitionEffect: "fade",

  // Settings
  enableAllSteps: false,  // Bloquear saltar pregunta
  enableKeyNavigation: false,  // Bloquear cambiar tab con teclado
  forceMoveForward: true,  // Bloquear retroceso

  // Event functions
  onStepChanging: function(event, currentIndex, newIndex){
    // Stop timer
    __timer__[currentIndex] = new Date().getTime() - _time_start;
    // validate
    $("#respuesta-error").remove()  // Fix error message
    return $(form.find('section')[currentIndex]).find(":input").valid()
  },
  onStepChanged: function(event, currentIndex, priorIndex){
    // Start timer
    _time_start = new Date().getTime()
  },
  onFinishing: function(event, currentIndex){
    // Stop timer
    __timer__[currentIndex] = new Date().getTime() - _time_start;
    // validate
    $("#respuesta-error").remove()  // Fix error message
    return $(form.find('section')[currentIndex]).find(":input").valid()
  },
  onFinished: function(event, currentIndex){
    // Save test data
    data = $("#wizard-test-form").serializeArray();

    $.ajax({
      url: "{{route('ep_alumno-do_test', ['id' => $test->id])}}",
      method: 'POST',
      dataType: 'json',
      data: {
        answers: data,
        timer: __timer__,
        _token: "{{ csrf_token() }}",
      },
      complete: function(response){
        window.location.replace("{{route('list-test')}}")
      }
    })
  }
});
$(".validation-wizard").validate({
  ignore: "input[type=hidden]",
  errorClass: "text-danger",
  successClass: "text-success",
  highlight: function(element, errorClass){
    $(element).removeClass(errorClass)
  },
  unhighlight: function(element, errorClass){
    $(element).removeClass(errorClass)
  },
  errorPlacement: function(error, element){
    error.insertAfter(element)
  }
})

// Start timer
let _time_start = new Date().getTime()
</script>
@endsection

@section('content')
<div class="wizard-content card card-body">
  <h4 class="card-title">{{$test->titulo}}</h4>
  <form action="#" id="wizard-test-form" class="tab-wizard wizard-circle validation-wizard">
    <br>
    @foreach($test->preguntas as $q)
    <h6>{{ucfirst($q->tema->nombre)}}</h6>
    <section>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>{{ucfirst($q->texto)}}</label>
            @if($q->tipo==2)
            <input name="respuesta-{{$q->id}}" class="form-control required" type="text">
            @elseif($q->tipo==1)
            <div class="mb-2">
              @if($q->alternativa_1)
              <label class="custom-control custom-radio">
                <input name="respuesta-{{$q->id}}" type="radio" class="custom-control-input" value="{{$q->alternativa_1}}" required>
                <span class="custom-control-label">{{$q->alternativa_1}}</span>
              </label>
              @endif
              @if($q->alternativa_2)
              <label class="custom-control custom-radio">
                <input name="respuesta-{{$q->id}}" type="radio" class="custom-control-input" value="{{$q->alternativa_1}}">
                <span class="custom-control-label">{{$q->alternativa_2}}</span>
              </label>
              @endif
              @if($q->alternativa_3)
              <label class="custom-control custom-radio">
                <input name="respuesta-{{$q->id}}" type="radio" class="custom-control-input" value="{{$q->alternativa_1}}">
                <span class="custom-control-label">{{$q->alternativa_3}}</span>
              </label>
              @endif
              @if($q->alternativa_4)
              <label class="custom-control custom-radio">
                <input name="respuesta-{{$q->id}}" type="radio" class="custom-control-input" value="{{$q->alternativa_1}}">
                <span class="custom-control-label">{{$q->alternativa_4}}</span>
              </label>
              @endif
              @if($q->alternativa_5)
              <label class="custom-control custom-radio">
                <input name="respuesta-{{$q->id}}" type="radio" class="custom-control-input" value="{{$q->alternativa_1}}">
                <span class="custom-control-label">{{$q->alternativa_5}}</span>
              </label>
              @endif
            </div>
            @endif
          </div>
        </div>
      </div>
    </section>
    @endforeach
  </form>
</div>
@endsection
