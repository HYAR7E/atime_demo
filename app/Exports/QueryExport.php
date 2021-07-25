<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class QueryExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Usuario::all();
    }
}
