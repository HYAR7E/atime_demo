@extends('templates.nav')
@section('title', 'Cursos')

@section('css')
<style media="screen">
  @media (min-width: 767px){
    .el-element-overlay .el-card-item .el-overlay-1 img {
      height: 100px!important; /* Fix image size */
    }
  }
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <!-- start: courses list -->
        <div class="row el-element-overlay">
          @foreach($cursos as $c)
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/material-pro/assets/images/courses/'.$c->nombre.'.jpg')}}" alt="curso-img" />
                  <div class="el-overlay scrl-up">
                    <ul class="el-info">
                      <li>
                        <a class="btn default btn-outline" href="{{route('course-detail', $c->id)}}"><i class="icon-link"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="el-card-content">
                  <h5 class="mb-0">{{ ucfirst($c->nombre) }}</h5>
                  <small>{{$c->count_tests()}} examenes</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- end: courses list -->

      </div>
    </div>
  </div>
</div>
@endsection
