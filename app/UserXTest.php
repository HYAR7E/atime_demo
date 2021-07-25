<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserXTest extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function test(){
    return $this->belongsTo('App\Test');
  }
  public function user(){
    return $this->belongsTo('App\Usuario');
  }
}
