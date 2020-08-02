@extends('templates.bg-image')

@section('css')
<style media="screen">
.login-sidebar .login-box {
  background: #000A;
  height: 100vh;
}
</style>
@endsection

@section('content')
<div class="login-sidebar">
  <div class="login-box card">
    <div class="card-body">
      <form method="POST" action="{{ route('register') }}" class="form-horizontal form-material" >
        <h3 class="p-2 rounded-title mb-3">Registrarse</h3>
        @csrf

        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control @error('nickname') is-invalid @enderror"
              id="nickname" type="text" name="nickname" value="{{ old('nickname') }}"
              required autocomplete="nickname" autofocus placeholder="Nombre de usuario">

            @error('nickname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="email" type="email"
              class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required
              autocomplete="email" placeholder="Correo">

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="password" type="password"
              class="form-control @error('password') is-invalid @enderror"
              name="password" autocomplete="new-password"
              required placeholder="Contraseña">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="password-confirm" type="password" required
              class="form-control" name="password_confirmation"
              autocomplete="new-password" placeholder="Confirmar contraseña">
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="rol" type="text"
              class="form-control @error('rol') is-invalid @enderror"
              name="rol" value="{{ old('rol') }}" required placeholder="rol">

            @error('rol')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="institucion" type="text" required
              class="form-control @error('institucion') is-invalid @enderror"
              name="institucion" value="{{ old('institucion') }}"
              placeholder="Institucion">

            @error('institucion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Register') }}
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
