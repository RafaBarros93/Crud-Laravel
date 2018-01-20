<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table ="vehicle";
    
    protected $fillable = ['id_provider', 'brand','model','year','plate','color'];
}
