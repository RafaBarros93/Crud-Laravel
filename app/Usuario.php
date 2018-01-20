<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table ="cliente";
   

    protected $fillable = [
     'nome',
      'email',
      'senha',
      'numero'

  ];
}
