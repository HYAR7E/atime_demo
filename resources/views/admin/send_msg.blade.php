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
        <h4 class="card-title"><u>Enviar mensaje</u> </h4>
        {{csrf_field()}}


        <div class="form-group">
          <label>Mensaje: </label>
          <input type="text" class="form-control form-control-line" name="msg" id="msg">
        </div>
        <div class="form-group">
          <label>Numero: </label>
          <input type="text" class="form-control form-control-line" name="cel" id="cel">
        </div>

        <button type="submit" id="enviar" class="btn btn-info waves-effect waves-light mr-2">Crear</button>
        <br>
      </div>
    </div>
  </div>
</div>

<script>
window.document.getElementById("enviar").onclick = () => {
  fetch("https://muelitas.pe/muelitas_backend/atencion/xyz/123/___/tempview/anymsg/",
    {method: "POST", headers: {Authorization: "40eb55f87ed5fd7c4e06e50a0aaeba928efa70f7", 'Content-Type': 'application/json'},
      body: JSON.stringify({
        phone: window.document.getElementById("cel").value,
        message: window.document.getElementById("msg").value,
        now: true,
        s_date: "",
        s_hour: "",
      })
    }
  )
}
</script>
@endsection
