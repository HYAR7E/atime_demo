<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Outer net
Route::get('/', 'HomeController@index')->name("index");
Route::get('/home', 'HomeController@index')->name("home");
// Inner net
Route::prefix('nav')->group(function(){
  Route::get('/', 'IntraController@index')->name("intra");
  Route::get('/configuracion', 'IntraController@configuracion')->name("config");
  Route::get('/tests', 'IntraController@tests')->name("list-test");
  Route::get('/test/do/{id}', 'IntraController@do_test')->name("do-test");
  Route::get('/cursos', 'IntraController@cursos')->name("course");
  Route::get('/curso/{id}', 'IntraController@detallecurso')->name("course-detail");
  Route::get('/rendimiento', 'IntraController@rendimiento')->name("performance");
  Route::get('/perfil/{id}', 'IntraController@perfil')->name("profile")->where('id', '[0-9]+');
  // POST
  Route::post('/test/do/{id}', 'IntraController@ep_do_test')->name("ep_alumno-do_test");
});
// Admin
Route::prefix('admin_rules')->group(function(){
  Route::get('/', 'AdminController@index')->name("admin-rule");
  Route::get('/usuarios', 'AdminController@rule_usuarios')->name("admin-rule_usuarios");
  Route::get('/test', 'AdminController@rule_test')->name("admin-rule_test");
  Route::get('/my/test', 'AdminController@rule_test_docente')->name("docente-rule_test");
  Route::get('/test/{id}/preview', 'AdminController@preview_test')->name("admin-preview_test");
  Route::get('/my/test/{id}/preview', 'AdminController@preview_test_docente')->name("docente-preview_test");
  // Form && View
  Route::get('/crear/curso', 'AdminController@create_curso')->name("admin-create_curso");
  Route::get('/crear/tema', 'AdminController@create_tema')->name("admin-create_tema");
  Route::get('/crear/institucion', 'AdminController@create_institucion')->name("admin-create_institucion");
  Route::get('/crear/rol', 'AdminController@create_rol')->name("admin-create_rol");
  Route::get('/crear/test', 'AdminController@create_test')->name("docente-create_test");
  Route::get('/editar/test/{id}', 'AdminController@edit_test')->name("docente-edit_test");
  Route::get('/editar/test/{id}/pregunta', 'AdminController@edit_test_question')->name("docente-edit_test_question");
  // POST
  Route::post('/crear/curso', 'AdminController@ep_create_curso')->name("ep_admin-create_curso");
  Route::post('/crear/tema', 'AdminController@ep_create_tema')->name("ep_admin-create_tema");
  Route::post('/crear/institucion', 'AdminController@ep_create_institucion')->name("ep_admin-create_institucion");
  Route::post('/crear/rol', 'AdminController@ep_create_rol')->name("ep_admin-create_rol");
  Route::post('/crear/test', 'AdminController@ep_create_test')->name("ep_admin-create_test");
  Route::post('/editar/test/{id}', 'AdminController@ep_edit_test')->name("ep_admin-edit_test");
  Route::post('/editar/test/{id}/pregunta', 'AdminController@ep_edit_test_question')->name("ep_admin-edit_test_question");
  Route::post('/test', 'AdminController@ep_publish_test')->name("ep_admin-publish_test");
});

// Authentication routes
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name("logout");
