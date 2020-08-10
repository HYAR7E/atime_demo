<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class IntraController extends Controller {
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    return view('templates.nav');
  }
  // Pages
  public function configuracion(){
    return view('intra.configuracion');
  }
  public function examenes(){
    return view('intra.examenes');
  }
  public function cursos(){
    return view('intra.cursos')->with(['cursos' => Curso::all()]);
  }
  public function detallecurso(Request $req, $id){
    return view('intra.detallecurso')->with(['curso' => Curso::get($id)]);
  }
  public function rendimiento(){
    return view('intra.rendimiento');
  }
  public function perfil(Request $req, $id){
    return view('intra.perfil');
  }
}
