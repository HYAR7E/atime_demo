<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Curso;
use App\Test;
use App\UserXTest;
use App\Respuesta;

class IntraController extends Controller {
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    if(Auth::user()->id==1) return redirect()->route('admin-rule');
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
  public function ep_do_test(Request $req, $id){
    $data = $req->post();

    // Validate test exists
    if( Test::find($id) ){
      // General calcs
      $tt = 0;  // Total time
      $n_q = count($data['timer']);
      foreach($data['timer'] as $t){
        $tt += $t;
      }
      $tt = floor($tt/1000);

      // Create UserXTest
      $uxt = UserXTest::create([
        'duracion' => $tt,
        'estado' => true,
        'test_id' => $id,
        'user_id' => Auth::user()->id,
      ]);

      // Create Respuesta
      $is_correct = 0;
      for($i=0; $i<count($data['answers']); $i++){
        $q = Respuesta::create([
          'respuesta' => $data['answers'][$i]['value'],
          'duracion' => floor($data['timer'][$i]/1000),
          'userxtest_id' => $uxt->id,
          'pregunta_id' => explode('-', $data['answers'][$i]['name'])[1],
        ]);

        if(strtoupper($q->respuesta) == strtoupper($q->pregunta->respuesta)) $is_correct++;
      }

      // Calc performance
      $uxt->nota = round($is_correct/$n_q, 2);
      $uxt->save();
    }else return false;

    return true;
  }
}
