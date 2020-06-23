<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioXTest extends Model {

  // Belonging
  public function test(){
    return $this->belongsTo('App\Test');
  }
  public function autor(){
    return $this->belongsTo('App\Usuario');
  }
  public function parent(){
    if(!$this->parent_id) return null;  // Return null if parent is null
    return $this->hasOne('App\ComentarioXTest', 'id', 'parent_id');
  }
  public function children(){
    return $this->hasMany('App\ComentarioXTest', 'parent_id', 'id');
  }
}
