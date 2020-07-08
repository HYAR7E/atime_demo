@extends('templates.horizontal')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          {{ __('HELLO WORLD!') }}
        </div>

        <div class="card-footer">
        @if(Auth::check())
          {{ __('YOU\'RE LOGGED IN') }}
        @else
          {{ __('HOW ABOUT LOGGING IN?') }}
        @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
