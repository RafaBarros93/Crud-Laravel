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



                   {!!Form::open(['url'=> 'clientes/salvar'])!!}
                   {!!Form::label('nome','Nome:')!!}
                   {!!form::input ('text','nome','',['class'=> 'form-control','autofocus','required','placeholder'=>'Nome:'])!!} 
                   {!!Form::label('endreco','Endereço:')!!}
                   {!!form::input ('text','endereco','',['class'=> 'form-control','','required','placeholder'=>'Endereço:'])!!}  
                   {!!Form::label('rua','Número:')!!}
                   {!!form::input ('text','rua','',['class'=> 'form-control','','required','placeholder'=>'Número:'])!!} 
                   
                    <br>
                    {!!Form::submit('Salvar',['class' => 'btn btn-primary'])!!}
                    </br>
                   {!!Form::close()!!}
       

                </div>
            </div>
        </div>
    </div>
</div>
@endsection