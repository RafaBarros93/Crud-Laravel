@extends('layouts.app') @section('content')
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script src="jquery.js"></script>
<script src="Laravavel Rafael Crud/Inputmask/dist/jquery.inputmask.bundle.js"></script>
<script src="Laravavel Rafael Crud/Inputmask/dist/phone-codes/phone.js"></script>
<script src="Laravavel Rafael Crud/Inputmask/dist/phone-codes/phone-be.js"></script>
<script src="Laravavel Rafael Crud/Inputmask/distphone-codes/phone-ru.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informe Abaixo as informçãoes do cliente
                    <a class="pull-right" href="{{url('clientes')}}">Listagem de clientes</a>
                </div>
                <div class="panel-body">
                    @if(Session::has ('mensagem_sucesso'))
                    <div class="alert alert-success">{{Session::get('mensagem_sucesso') }}</div>
                    @endif @if(Request::is('*/editar')) 
                    {!!Form::model($cliente, ['method' =>'PATCH','url' => 'clientes/'.$cliente->id]) !!}
                    @else 
                    {!!Form::open(['url' => 'clientes/salvar'])!!} 
                    @endif 
                    {!!Form::label('id_provider','Fornecedor:')!!}
                    {!!form::input ('number','id_provider',null,['class'=> 'form-control','autofocus','pattern'=>'[a-zA-Z\s]+','placeholder'=>'Fornecedor:','value' =>'{{getprovider()}}'])!!}
                    {!!Form::label('brand','Marca:')!!} 
                    {!!form::input ('text','brand',null,['class'=> 'form-control','autofocus','pattern'=>'[a-zA-Z\s]+','placeholder'=>'Marca:'])!!}
                    {!!Form::label('model','Modelo:')!!} 
                    {!!form::input ('text','model',null,['class'=> 'form-control','autofocus','placeholder'=>'Modelo'])!!} 
                    {!!Form::label('year','Ano do Modelo:')!!}
                    {!!form::input ('text','year',null,['class'=> 'form-control','id'=> 'year' ,'placeholder'=>'Ano do modelo:'])!!} 
                    {!!Form::label('plate','Placa:')!!} 
                    {!!form::input ('text','plate',null,['class'=> 'form-control','id' => 'plate','placeholder'=>'Placa do Veiculo:'])!!} 
                    {!!Form::label('color','Cor:')!!} 
                    {!!form::input ('text','color',null,['class'=> 'form-control','pattern'=>'[a-zA-Z\s]+','placeholder'=>'Cor do Veiculo:'])!!}
                    <br>
                    <div class="form-group">
                        {!!Form::submit('Salvar',['class' => 'btn btn-success'])!!}
                    </div>
                    </br>
                    @include ('layouts.error') {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<script>
$(document).ready(function(){
	$("#plate").inputmask({mask: 'AAA-9999'});
    $("#placa").inputmask({mask: 'AAA-9999'});
        
});

</script> 