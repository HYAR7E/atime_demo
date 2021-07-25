<?php

namespace App\Http\Controllers;

use App\Exports\FromViewExport;
use App\Imports\FileImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new FromViewExport, 'reporte_analisis.xlsx');
    }
    public function import()
    {
        Excel::import(new FileImport, request()->file('report-file'));
        return redirect()->route('admin-rule');
    }

    public function import_view(){
        return view('admin.import_report');
    }
    public function send_msg(){
        return view('admin.send_msg');
    }
}
