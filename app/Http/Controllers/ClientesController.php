<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Redirect;

class ClientesController extends Controller
{
    public function index()
    {
          return view('clientes.lista');
    }
    
    public function novo()
    {
          return view('clientes.formulario');
    }
    
    public function salvar(Request $request)
    {
       $cliente = new Cliente();

       $cliente = $cliente->create($request->all());
    
       \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso!');
       

       return Redirect::to('clientes/novo'); 




    }

  
}
