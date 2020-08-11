@extends('templates.nav')
@section('title', 'Rendimiento')

@section('css')
<style media="screen">
</style>
@endsection

@section('js-el')
<script src="{{asset('material-pro/assets/plugins/gauge/gauge.min.js')}}"></script>
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
$("#av-performance-time").sparkline(
  {{Auth::user()->average_performance_time()}}, {
  type: 'line',
  width: '100%',
  height: '50',
  lineColor: '#fff',
  fillColor: '#1e88e5',
  maxSpotColor: '#1e88e5',
  highlightLineColor: 'rgba(0, 0, 0, 0.2)',
  highlightSpotColor: '#1e88e5'
});
</script>
@endsection

@section('content')
<div class="row">
  <div class="col-12">

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
      <div class="col-lg-4 col-md-6">
        <div class="card card-inverse card-info">
          <div class="card-body">
            <h4 class="card-title">Tiempo de respuesta</h4>
            <h6 class="card-subtitle">promedio</h6>
            <div id="av-performance-time"><canvas width="200" height="50" style="display: inline-block; width: 200.25px; height: 50px; vertical-align: top;"></canvas></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
