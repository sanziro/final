@extends('layouts.indexLogued')

@section('content')
<div class="conteiner-config">
                <form action="{{ url('configuracion') }}/1" method="POST">
                    {{ Form::open(['method' => 'PUT', 'route' => ['configuracion.update', $datos->id]]) }}
            <div class="container-menu-config"> <label id="titulo-configadmin"> Menu de configuracion </label></div>
                <hr>
                
        <label class="label-imput-contigAdmin" >Estado: </label>
        <select   id="imput-adminconfig" class=" form-control" name="habilitada">
                <option value="1"  @if ($datos->habilitada === 1) selected  @endif >habilitada</option>
            <option value="0"  @if ($datos->habilitada === 0) selected  @endif >desabilitada</option></select><br>
         
        <label class="label-imput-contigAdmin" > Titulo de  la cooperativa: </label>
        <input  id="imput-adminconfig2" type="text" name="titulo" class=" form-control" value="{{$datos->titulo }}" required><br>
        
        <label class="label-imput-contigAdmin" > Contacto: </label>
        <input  id="imput-adminconfig3" type="text" name="mailContacto" class=" form-control" value="{{$datos->mailContacto }}" required ><br>
        
        <label class="label-imput-contigAdmin" > Cantidad de elementos por pagina: </label>
        <input   id="imput-adminconfig4" type="number" class=" form-control" name="cantElem" value="{{$datos->cantElem }}" min="1" max="10" required><br>
        
        <label class="label-imput-contigAdmin"> Mensaje pagina desabilitada </label>
        <input   id="imput-adminconfig5" type="text" class=" form-control" name="textoDeshab" value="{{$datos->textoDeshab }}" required><br>
        
        
         <label class="label-imput-contigAdmin" > Descripcion: </label>
        <textarea id="text-imput" required="" class="form-control" maxlength="2600" rows="3" name="descripcion" required>{{$datos->descripcion }}</textarea>
        <button value="{{$datos->clave }}" name="clave" id="buttom-contigAdmin" type="submit" class="btn-block btn btn-primary">Actualizar</button>    
            
            
    
        
			 {{Form::close()}}
            

        </div>
        @endsection