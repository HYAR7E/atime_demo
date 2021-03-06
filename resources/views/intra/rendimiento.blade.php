@extends('templates.nav')
@section('title', 'Rendimiento')

@section('css')
<style media="screen">
</style>
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/gauge/gauge.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/morrisjs/morris.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/raphael/raphael.min.js')}}"></script>
<script>
// Intentos
var opts = {
  angle: 0, // The span of the gauge arc
  lineWidth: 0.42, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
    length: 0.64, // // Relative to gauge radius
    strokeWidth: 0.04, // The thickness
    color: '#000000' // Fill color
  },
  limitMax: false,     // If false, the max value of the gauge will be updated if value surpass max
  limitMin: false,     // If true, the min value of the gauge will be fixed unless you set it manually
  colorStart: 'orange',   // Colors
  strokeColor: 'lightgray',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true     // High resolution support
};
var target = document.getElementById('av-performance-tries'); // your canvas element
var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
gauge.maxValue = 1; // set max gauge value
gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge.animationSpeed = 45; // set animation speed (32 is default value)
gauge.set({{Auth::user()->average_performance_tries()[0]->av}}); // set actual value

// Tiempo
Morris.Area({
  element: 'av-performance-time2',
  data: JSON.parse("{{Auth::user()->average_performance_time()}}".replace(/&quot;/g,'"')),
  xkey: 'i',
  ykeys: ['tiempo'],
  labels: ['Tiempo de respuesta'],
  pointSize: 2,
  fillOpacity: 0,
  pointStrokeColors:['#55ce63'],
  behaveLikeLine: true,
  gridLineColor: '#e0e0e0',
  lineWidth: 2,
  hideHover: 'auto',
  lineColors: ['blue'],
  parseTime: false,
  resize: true
});
</script>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <pre hidden>
      TESTING
      {{Auth::user()->average_performance_time()}}
    </pre>

    <div class="row">
      <!-- widget -->
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round text-white d-inline-block text-center rounded-circle bg-info"><i class="fas fa-tasks"></i></div>
              <div class="ml-2 align-self-center">
                <h3 class="mb-0">{{Auth::user()->count_tries()}}</h3>
                <h5 class="text-muted mb-0">Tests resueltos</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center">Porcentaje de aciertos</h4>
            <div class="gaugejs-box" style="width: 150px;">
              <canvas id="av-performance-tries" class="gaugejs" height="75" width="150">guage</canvas>
            </div>
          </div>
          <div class="p-2 rounded border-top text-center">
            <h4 class="font-medium mb-0">{{round(Auth::user()->average_performance_tries()[0]->av*100, 1)}}%</h4>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="d-md-flex no-block align-items-center">
              <h4 class="card-title">Tiempo de respuesta promedio general</h4>
              <div class="ml-auto">
                <ul class="list-inline text-right mb-0">
                  <li class="list-inline-item">
                    <h5 class="mb-0"><i class="fa fa-circle mr-1 text-info"></i>Tiempo</h5>
                  </li>
                </ul>
              </div>
            </div>
            <div id="av-performance-time2"></div>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>

  </div>
</div>
@endsection
