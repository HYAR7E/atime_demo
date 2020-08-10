<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Institucion;
use App\Rol;
use App\Curso;
use App\CursoXTest;
use App\Tema;
use App\TemaXTest;
use App\Test;
use App\Pregunta;
use App\Usuario;

class AdminController extends Controller {
  public function __construct(){
    $this->middleware('auth');  // User needs to be logged
  }

  public function index(){
    return view('admin.nav');
  }
  // GET
  public function create_institucion(){
    return view('admin.crear_institucion')->with('insts', Institucion::all());
  }
  public function create_rol(){
    return view('admin.crear_rol')->with('roles', Rol::orderBy('created_at', 'desc')->get());
  }
  public function create_curso(){
    return view('admin.crear_curso')->with('cursos', Curso::orderBy('created_at', 'desc')->get());
  }
  public function create_tema(){
    return view('admin.crear_tema')->with('temas', Tema::orderBy('created_at', 'desc')->get());
  }
  public function create_test(){
    // $tests = Test::where('autor_id', Auth::user()->id);
    $tests = Test::all();
    $cursos = Curso::all();
    $temas = Tema::all();
    return view('admin.crear_test')
      ->with('tests', $tests)
      ->with('cursos', $cursos)
      ->with('temas', $temas);
  }
  public function rule_usuarios(){
    $usuarios = Usuario::all();
    return view('admin.rule_usuarios')->with('usuarios', $usuarios);
  }
  public function rule_test(){
    $tests = Test::all();
    return view('admin.rule_test')
      ->with('tests', $tests)
      ->with('hiddennav', 'single-column');
  }
  public function edit_test(Request $req, $id){
    $test = Test::find($id);
    $cursos = Curso::all();
    $temas = Tema::all();

    // Get test's cursos y temas
    $test_cursos = [];
    foreach($test->cursos as $c){
      array_push($test_cursos, $c->curso_id);
    }
    $test_temas = [];
    foreach($test->temas as $t){
      array_push($test_temas, $t->tema_id);
    }

    return view('admin.editar_test')
      ->with('test', $test)
      ->with('cursos', $cursos)
      ->with('temas', $temas)
      ->with('test_cursos', $test_cursos)
      ->with('test_temas', $test_temas);
  }
  public function edit_test_question(Request $req, $id){
    $test = Test::find($id);
    $temas = Tema::all();
    return view('admin.editar_test_question')
      ->with('test', $test)
      ->with('temas', $temas);
  }
  public function preview_test(Request $req, $id){
    $test = Test::find($id);
    return view('admin.preview_test')->with('test', $test);
  }

  // POST (ep: end point)
  public function ep_create_institucion(Request $req){
    $data = $req->post();
    // Validate data
    $inst = false;
    if(
      preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ ]+$/', $data['institucion-nombre'])
    ){
      $inst = Institucion::create([
        'nombre' => $data['institucion-nombre'],
        'contacto' => $data['institucion-contacto']
      ]);
    }

    // Create institution
    return $this->create_institucion()->with('msg', !!$inst);
  }
  public function ep_create_rol(Request $req){
    $data = $req->post();
    // Validate data
    $rol = false;
    if(preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ ]+$/', $data['rol-nombre'])){
      $rol = Rol::create([
        'nombre' => $data['rol-nombre']
      ]);
    }

    // Create rol
    return $this->create_rol()->with('msg', !!$rol);
  }
  public function ep_create_curso(Request $req){
    $data = $req->post();
    // Validate data
    $curso = false;
    if(preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,. ]+$/', $data['curso-nombre'])){
      $curso = Curso::create([
        'nombre' => $data['curso-nombre']
      ]);
    }

    // Create curso
    return $this->create_curso()->with('msg', !!$curso);
  }
  public function ep_create_tema(Request $req){
    $data = $req->post();
    // Validate data
    $tema = false;
    if(preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,. ]+$/', $data['tema-nombre'])){
      $tema = Tema::create([
        'nombre' => $data['tema-nombre']
      ]);
    }

    // Create tema
    return $this->create_tema()->with('msg', !!$tema);
  }
  public function ep_create_test(Request $req){
    $data = $req->post();
    // Validate data
    $test = false;
    if(
      preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,. ]+$/', $data['test-titulo']) &&
      preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,. ]+$/', $data['test-descripcion'])
    ){
      $test = Test::create([
        'titulo' => $data['test-titulo'],
        'descripcion' => $data['test-descripcion'],
        'tiempo_limite' => $data['test-tiempo_limite'],
        'autor_id' => Auth::user()->id
      ]);
      foreach($data['test-curso'] as $c){
        CursoXTest::create(['curso_id'=> $c, 'test_id' => $test->id]);
      }
      foreach($data['test-tema'] as $t){
        TemaXTest::create(['tema_id'=> $t, 'test_id' => $test->id]);
      }
    }

    // Create test
    return $this->create_test()->with('msg', !!$test);
  }
  public function ep_edit_test(Request $req, $id){
    $data = $req->post();
    // Validate data
    $test = false;
    if(
      preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,.,. ]+$/', $data['test-titulo']) &&
      preg_match('/^[0-9A-Za-zñáÁéÉíÍóÓúÚ\-,.,. ]+$/', $data['test-descripcion'])
    ){
      $test = Test::find($id);
      $test->titulo = $data['test-titulo'];
      $test->descripcion = $data['test-descripcion'];
      $test->tiempo_limite = $data['test-tiempo_limite'];
      $test->save();
      // Delete instead of update
      if(isset($data['test-curso'])){
        CursoXTest::where('test_id', $test->id)->delete();
        foreach($data['test-curso'] as $c){
          CursoXTest::create(['curso_id'=> $c, 'test_id' => $test->id]);
        }
      }
      if(isset($data['test-tema'])){
        TemaXTest::where('test_id', $test->id)->delete();
        foreach($data['test-tema'] as $t){
          TemaXTest::create(['tema_id'=> $t, 'test_id' => $test->id]);
        }
      }
    }

    // Create test
    return $this->edit_test($req, $id)->with('msg', !!$test)->with('add', $data);
  }
  public function ep_edit_test_question(Request $req, $id){
    $data = $req->post();
    // Validate data
    $q = false;
    if( Test::find($id) ){
      $q = Pregunta::create([
        'tipo' => $data['q-tipo'],
        'texto' => $data['q-texto'],
        'alternativa_1' => $data['q-alternativa_1']??null,
        'alternativa_2' => $data['q-alternativa_2']??null,
        'alternativa_3' => $data['q-alternativa_3']??null,
        'alternativa_4' => $data['q-alternativa_4']??null,
        'alternativa_5' => $data['q-alternativa_5']??null,
        'respuesta' => $data['q-respuesta'],
        'tiempo_limite' => $data['q-tiempo_limite'],
        'tema_id' => $data['q-tema'],
        'test_id' => $id,
      ]);
    }

    // Create test
    return $this->edit_test_question($req, $id)->with('msg', !!$q);
  }
  public function ep_publish_test(Request $req){
    $data = $req->post();
    // Validate data
    $test = false;
    if(preg_match('/^[0-9]+$/', $data['test-id'])){
      $test = Test::find($data['test-id']);
      $test->publicado = true;
      $test->save();
    }

    // Create test
    return $this->rule_test()->with('msg', !!$test);
  }
}
