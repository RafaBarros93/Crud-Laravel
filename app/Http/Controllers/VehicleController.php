<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class VehicleController extends Controller
{
    public function teste()
    {
     return view('teste');
    }
    public function salvar(Request $request)     {
               $teste = new Vehicle();
        
               $this->validate(request(), [
                'id_provider'=>'required',
                'brand' => 'required',
                'model' => 'required',
                'year' => 'required',
                'color' => 'required',
                'plate' => 'required',
                 
                ]);        

             $teste = $teste->create($request->all());
                   
            \Session::flash('mensagem_sucesso','Carro cadastrado com sucesso!');
                      
               
              return Redirect::to('clientes/teste');        
    }
}
