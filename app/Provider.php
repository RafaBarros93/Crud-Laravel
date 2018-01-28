<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table ="provider";
    
    protected $fillable = ['name', 'city'];

public function clientes ()
{
     return $this ->hasmany(Cliente::class);
}

}
