<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoXRolXPlan extends Model {
  public $timestamps = false;

  // Belonging
  public function rol(){
    return $this->belongsTo('App\Rol');
  }
  public function tema(){
    return $this->belongsTo('App\Tema');
  }
}
