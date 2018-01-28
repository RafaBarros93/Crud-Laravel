<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ="cliente";
    
    protected $fillable = ['id_provider', 'brand','model','year','plate','color'];
    
    
    
    public function getprovider()
    {
    return Provider::where('id',$this->id_provider)->first()->name;  
   
    }






}
