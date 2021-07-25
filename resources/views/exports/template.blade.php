<table>
  <thead>
    <tr></tr>
    <tr><td></td>
      <td>Año: </td>
      <td>2021</td>
    </tr>
    <tr><td></td>
      <td>Grado: </td>
      <td>5</td>
    </tr>
    <tr><td></td>
      <td>Seccion: </td>
      <td>A</td>
    </tr>
    <tr></tr>
    <tr>
      <td colspan="2">Alumno</td>
      @foreach($cursos as $c)
      <td rowspan="2">{{$c->nombre}}</td>
      @endforeach
    </tr>
    <tr>
      <td>Codigo</td>
      <td>Nombre</td>
    </tr>
    @foreach($alumnos as $a)
    <tr>
      <td>{{$a->codigo}}</td>
      <td>{{$a->nombres}} {{$a->apellidos}}</td>
      @foreach($cursos as $c)
      <td>{{$notas[$a->id][$c->id]}}</td>
      @endforeach
    </tr>
    @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
<table>
  <thead>
    <tr>
      <td>Docente</td>
      <td>Curso</td>
      <td>Promedio</td>
    </tr>
  </thead>
  <tbody>
    @foreach($promdoc as $pd)
    <tr>
      <td>{{$pd[0]}}</td>
      <td>{{$pd[1]}}</td>
      <td>{{$pd[2]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
