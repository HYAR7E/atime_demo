@extends('templates.bg-image')

@section('content')
<div class="login-register">
  <div class="login-box card">
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}" class="form-horizontal form-material">
        <h3 class="p-2 rounded-title mb-3">Iniciar Sesion</h3>
        @csrf

        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required
              id="email" type="email" autocomplete="email"
              autofocus placeholder="Correo electronico">

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password"
              id="password" type="password" placeholder="Contraseña">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="d-flex no-block align-items-center">
            <div class="checkbox checkbox-primary pt-0">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group text-center mt-3">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ __('Login') }}</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
