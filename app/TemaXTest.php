<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemaXTest extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function tema(){
    return $this->belongsTo('App\Tema');
  }
  public function test(){
    return $this->belongsTo('App\Test');
  }
}
