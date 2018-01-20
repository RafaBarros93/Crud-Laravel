@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informe Abaixo as informçãoes do  cliente
                 <a class="pull-right" href="{{url('clientes')}}">Listagem de clientes</a>
                </div>
                <div class="panel-body">
                   @if(Session::has ('mensagem_sucesso'))
                         <div class="alert alert-success">{{Session::get('mensagem_sucesso') }}</div>
                   @endif 
                   

                   @if(Request::is('*/editar'))
                        {!!Form::model($cliente, ['method' =>'PATCH','url' => 'clientes/'.$cliente->id]) !!}
                   @else
                      {!!Form::open(['url' => 'clientes/salvar'])!!} 
                   @endif    
                    

                   {!!Form::open(['url'=> 'clientes/salvar','data-toggle'=>'validator' ])!!}
                   {!!Form::label('nome','Nome:')!!}
                   {!!form::input ('text','nome',null,['class'=> 'form-control','autofocus','required','pattern'=>'[a-zA-Z\s]+','placeholder'=>'Nome:'])!!} 
                   {!!Form::label('endreco','Endereço:')!!}
                   {!!form::input ('text','endereco',null,['class'=> 'form-control','','required','pattern'=>'[a-zA-Z\s]+','placeholder'=>'Endereço:'])!!}  
                   {!!Form::label('rua','Número:')!!}
                   {!!form::input ('number','rua',null,['class'=> 'form-control','','required','placeholder'=>'Número:'])!!} 
                   
                    <div class="form-group">
                    {!!Form::submit('Salvar',['class' => 'btn btn-primary'])!!}
                   </div>
                 
                   @include ('layouts.error') 
                     
                
                   {!!Form::close()!!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection