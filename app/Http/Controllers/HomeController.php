<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function __construct(){
    // $this->middleware('auth');
  }

  public function index(){
    // Redirect to Nav if user alreay logged
    if(Auth::check()) return redirect('nav');

    return view('home');
  }
}
