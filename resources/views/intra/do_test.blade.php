@extends('admin.nav')
@section('title', 'Previsualizar test')

@section('css')
<link href="{{asset('material-pro/assets/plugins/wizard/steps.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/wizard/jquery.steps.min.js')}}"></script>
<!-- <script src="{{asset('material-pro/assets/plugins/wizard/jquery.validate.min.js')}}"></script> -->
@endsection

@section('js-code')
// Initialize step.js wizard
$(".tab-wizard").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    next: "Siguiente",
    previous: "Anterior",
    finish: "Terminar"
  },
  onFinished: function(event, currentIndex){
    alert("EXAMEN TERMINADO")
    window.history.back()
  }
});
@endsection

@section('content')
<div class="wizard-content card card-body">
  <h4 class="card-title">{{$test->titulo}}</h4>
  <form action="#" class="tab-wizard wizard-circle">
    <br>
    @foreach($test->preguntas as $q)
    <!-- Step 1 -->
    <h6>{{$q->tema->nombre}}</h6>
    <section>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>{{$q->texto}}</label>
            @if($q->tipo==2)
            <input name="respuesta" type="text" class="form-control">
            @elseif($q->tipo==1)
            <div class="mb-2">
              @if($q->alternativa_1)
              <label class="custom-control custom-radio">
                <input name="respuesta" type="radio" class="custom-control-input required" value="1">
                <span class="custom-control-label">{{$q->alternativa_1}}</span>
              </label>
              @endif
              @if($q->alternativa_2)
              <label class="custom-control custom-radio">
                <input name="respuesta" type="radio" class="custom-control-input" value="2">
                <span class="custom-control-label">{{$q->alternativa_2}}</span>
              </label>
              @endif
              @if($q->alternativa_3)
              <label class="custom-control custom-radio">
                <input name="respuesta" type="radio" class="custom-control-input" value="3">
                <span class="custom-control-label">{{$q->alternativa_3}}</span>
              </label>
              @endif
              @if($q->alternativa_4)
              <label class="custom-control custom-radio">
                <input name="respuesta" type="radio" class="custom-control-input" value="4">
                <span class="custom-control-label">{{$q->alternativa_4}}</span>
              </label>
              @endif
              @if($q->alternativa_5)
              <label class="custom-control custom-radio">
                <input name="respuesta" type="radio" class="custom-control-input" value="5">
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
