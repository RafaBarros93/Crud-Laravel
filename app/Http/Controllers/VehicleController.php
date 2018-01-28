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
                      
               
              return Redirect::to('clientes/teste/salvar');        
    }
    public function editar($id)
    {
           $cliente = Cliente::findOrFail($id);

           return view('clientes.formulario',['cliente'=>$cliente]);
    }   
    
    
    public function atualizar($id,Request $request)
    {
      $cliente = Cliente::findOrFail($id);
                  
      $cliente -> update ($request->all());
 
      \Session::flash('mensagem_sucesso','Cliente atualizado com sucesso!');
 
      return Redirect::to('clientes/'.$cliente->id.'/editar');
    }


    public function deletar($id)
    {
            $cliente = Cliente::findOrFail($id);

            $cliente->delete();

            \Session::flash('mensagem_sucesso','Cliente deletado com sucesso!');
 
            return Redirect::to('clientes');   
    }
    
    
    public function provider()
    {
      $cliente = Provider::table('clientes')
      ->join('provider', 'clientes.id_provider', '=', 'provider.id')
      ->select('provider.name')
      ->get();
    }    
  }   
    
