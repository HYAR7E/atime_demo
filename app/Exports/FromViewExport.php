<?php

namespace App\Exports;

use App\Alumno;
use App\Docente;
use App\Curso;
use App\NotaAlumno;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class FromViewExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        $alumnos = Alumno::where("grado", 5)->where("seccion", "A")->get();
        $cursos = Curso::all();
        $docentes = Docente::all();
        $grado = [1, 2, 3, 4, 6];
        $notas = [];
        foreach($alumnos as $a){
          foreach($cursos as $c){
            $_notas = NotaAlumno::where("alumno_id", $a->id)->where("curso_id", $c->id)->get();
            $_total = 0;
            foreach($_notas as $n) $_total += $n->nota;
            if(count($_notas) == 0) $notas[$a->id][$c->id] = "-";
            else $notas[$a->id][$c->id] = round($_total/count($_notas), 1);
          }
        }

        $promdoc = [];
        foreach($docentes as $d){
          $curdoc = Curso::where("docente_id", $d->id)->get();
          foreach($curdoc as $c){
            $_notas = NotaAlumno::where("curso_id", $c->id)->get();
            $_total = 0;
            foreach($_notas as $n) $_total += $n->nota;
            $_prom = 0;
            if(count($_notas) == 0) $_prom = "-";
            else $_prom = round($_total/count($_notas), 1);

            $ar = [$d->nombres." ".$d->apellidos, $c->nombre, $_prom];
            array_push($promdoc, $ar);
          }
        }

        return view('exports.template', [
          'cursos' => $cursos,
          'alumnos' => $alumnos,
          'notas' => $notas,
          'promdoc' => $promdoc,
        ]);
    }
}
