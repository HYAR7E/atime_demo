<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model {

  protected $fillable = ['nombre', 'contacto'];

  public $timestamps = false;
}
