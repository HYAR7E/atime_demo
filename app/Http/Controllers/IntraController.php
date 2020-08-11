<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Test;

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
  public function tests(){
    return view('intra.tests')->with(['tests' => Test::where('publicado', true)->get()]);
  }
  public function cursos(){
    return view('intra.cursos')->with(['cursos' => Curso::all()]);
  }
  public function detallecurso(Request $req, $id){
    return view('intra.detallecurso')->with(['curso' => Curso::find($id)]);
  }
  public function rendimiento(){
    return view('intra.rendimiento');
  }
  public function perfil(Request $req, $id){
    return view('intra.perfil');
  }
  // DO TEST
  public function do_test(Request $req, $id){
    $test = Test::where('id', $id)->where('publicado', true)->get()[0];
    return view('intra.do_test')->with(['test' => $test]);
  }
}
