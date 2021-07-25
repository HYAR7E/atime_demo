@extends('admin.nav')
@section('title', 'Administrar usuarios')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Usuarios del sistema</h4>
        <h6 class="card-subtitle">{{count($usuarios)}} registros</h6>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Institucion</th>
                <th>Rol</th>
              </tr>
            </thead>
            <tbody>
              @foreach($usuarios as $u)
              <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->nickname}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->descripcion_institucion()}}</td>
                <td><span class="badge {{
                  ($u->rol->id==1 ?'badge-danger'
                  :($u->rol->id==2 ?'badge-primary'
                  :($u->rol->id==3 ?'badge-secondary' :'')
                  ))
                }}">{{$u->descripcion_rol()}}</span> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
