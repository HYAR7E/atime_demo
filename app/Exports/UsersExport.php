<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class UsersExport implements FromCollection, WithCustomStartCell
{
    use Exportable;

    public function collection()
    {
        return Usuario::all();
    }
    public function startCell(): string
    {
        return "B2";
    }
}
