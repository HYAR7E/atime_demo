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

Route::get('/', 'HomeController@index')->name("index");
Route::get('/home', 'HomeController@index')->name("home");

Route::prefix('nav')->group(function(){
  Route::get('/', 'IntraController@index')->name("intra");
  Route::get('/configuracion', 'IntraController@configuracion')->name("config");
  Route::get('/examenes', 'IntraController@examenes')->name("av-test");
  Route::get('/cursos', 'IntraController@cursos')->name("course");
  Route::get('/curso/{id}', 'IntraController@detallecurso')->name("course-detail");
  Route::get('/rendimiento', 'IntraController@rendimiento')->name("performance");
  Route::get('/perfil/{id}', 'IntraController@perfil')->name("profile")->where('id', '[0-9]+');
});

// Authentication routes
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name("logout");
