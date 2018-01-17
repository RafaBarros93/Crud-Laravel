<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table ="tbl_usuarios";
   

    protected $fillable = [
     'nome',
      'email',
      'senha',
      'numero'

  ];
}
