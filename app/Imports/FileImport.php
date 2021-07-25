<?php

namespace App\Imports;

use App\Alumno;
use App\Docente;
use App\NotaAlumno;
use App\Trimestre;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class FileImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        /* error_log(); */
        $year = $rows[1][2];
        $grado = $rows[2][2];
        $seccion = $rows[3][2];
        $tr1 = Trimestre::where('year', $year)->where('numero', 1)->first();
        $tr2 = Trimestre::where('year', $year)->where('numero', 2)->first();
        $tr3 = Trimestre::where('year', $year)->where('numero', 3)->first();

        // Data adicional
        for($i=7; $i<count($rows); $i++)
        {
            $codigo = $rows[$i][0];
            $prom_final = $rows[$i][20];
            $alumno = Alumno::where('grado', $grado)->where('seccion', $seccion)->where('codigo', $codigo)->first();
            if($alumno === null) continue;

            $_tr1 = [
              $rows[$i][2],
              $rows[$i][3],
              $rows[$i][4],
              $rows[$i][5],
              $rows[$i][6],
              $rows[$i][7]];
            $_tr2 = [
              $rows[$i][8],
              $rows[$i][9],
              $rows[$i][10],
              $rows[$i][11],
              $rows[$i][12],
              $rows[$i][13]];
            $_tr3 = [
              $rows[$i][14],
              $rows[$i][15],
              $rows[$i][16],
              $rows[$i][17],
              $rows[$i][18],
              $rows[$i][19]];
            for($j=0; $j<6; $j++){
                NotaAlumno::create([
                  'nota' => $_tr1[$j],
                  'alumno_id' => $alumno->id,
                  'curso_id' => $j+1,
                  'trimestre_id' => $tr1->id,
                ]);
                NotaAlumno::create([
                  'nota' => $_tr2[$j],
                  'alumno_id' => $alumno->id,
                  'curso_id' => $j+1,
                  'trimestre_id' => $tr2->id,
                ]);
                NotaAlumno::create([
                  'nota' => $_tr3[$j],
                  'alumno_id' => $alumno->id,
                  'curso_id' => $j+1,
                  'trimestre_id' => $tr3->id,
                ]);
            }
        }
    }
}
