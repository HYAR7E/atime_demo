@extends('admin.nav')
@section('title', 'Importar reporte')

@section('css')
<style media="screen">
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="" action="{{ route('excel-import') }}" method="POST" enctype="multipart/form-data">
          <h4 class="card-title"><u>Reporte de notas</u> </h4>
          {{csrf_field()}}


          <div class="form-group">
            <label>Archivo: </label>
            <input type="file" class="form-control form-control-line" name="report-file">
          </div>

          <button type="submit" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        </form> <!-- end form -->
        <br>
      </div>
    </div>
  </div>
</div>
@endsection
