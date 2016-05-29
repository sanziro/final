@extends('layouts.indexLogued')

@section('content')

<div class="contenedor_formulario">
			<div class="container">
			  <h2>Modificar datos de alumno {{$alumno->nombre}} {{$alumno->apellido}}</h2>
			  {{Form::model($alumno,array( 'method'=>'PUT','action' => array('AlumnoController@update',$alumno->id), 'id'=>"myform",'name'=>'alumno[]'))}}
			  	<div class="form-group">
			      <label for="imput-adminconfig-nombre">Nombre:</label>
			      <input id="imput-adminconfig-nombre" type="text" class="form-control" value="{{$alumno->nombre}}" name="alumno[nombre]" placeholder="Introduzca su Nombre" required>
			        
			    </div>
			    <div class="form-group">
			      <label for="imput-adminconfig-apellido">Apellido:</label>
			      <input type="text" id="imput-adminconfig-apellido" class="form-control" value="{{$alumno->apellido}}" name="alumno[apellido]" placeholder="Introduzca su Apellido" required>
			    </div>
			    <div class="form-group">
			      <label for="imput-adminconfig-dni">Número de documento:</label>
			      <input type="number" id="imput-adminconfig-dni" class="form-control" value="{{$alumno->numeroDoc}}" name="alumno[numeroDoc]" placeholder="Introduzca su numero de documento" required>
			    </div>
			    
			   <div class="form-group">
			      <label for="imput-adminconfig-dni">Sexo:</label>
			    <div class="form-group">
					  <select name="alumno[sexo]" id="imput-adminconfig-sexo" class="form-control" id="sexo" required >
					    <option value="masculino" @if (($alumno->sexo) === 'masculino') selected="selected" @endif  > Masculino
					    <option value="femenino"  @if (($alumno->sexo) === 'femenino') selected="selected"  @endif  > Femenino</option>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label for="imput-adminconfig-dni">Fecha de Nacimiento:</label>
                <div class='input-group date'>
                    <input type='date' name="alumno[fechaNacimiento]" id="imput-adminconfig-nacimiento" value="{{$alumno->fechaNacimiento}}" class="form-control" required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            	 <div class="form-group">
			      <label for="imput-adminconfig-dni">Domicilio:</label>
			      <input type="text" id="imput-adminconfig-direccion" class="form-control" value="{{$alumno->direccion}}" name="direccion" placeholder="Introduzca su domicilio" required>
			    </div>
            	<div class="form-group">
			      <label for="imput-adminconfig-mail">Email:</label>
			      <input type="email" value="{{$alumno->mail}}" id="imput-adminconfig-mail" class="form-control" name="alumno[mail]" placeholder="Introduzca su Email" required>
			    </div>
				<div class="form-group">
					<label for="imput-adminconfig-ingreso">Fecha de Ingreso a la escuela:</label>
                <div class='input-group date'>
                    <input type='date' name='alumno[fechaIngreso]' id="imput-adminconfig-ingreso" value="{{$alumno->fechaIngreso}}" class="form-control" required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            	<div class="form-group">
					<label for="imput-adminconfig-egreso">Fecha de Egreso de la escuela:</label>
                <div class='input-group date'>
                    <input type='date' name='alumno[fechaEgreso]' id="imput-adminconfig-egreso"  value="{{$alumno->fechaEgreso}}" class="form-control" >
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            	 {{ Form::submit('Actualizar', array("class"=>"btn btn-primary btn")) }}

			  {{Form::close()}}
                          <a href="{{ action('ResponsableController@index', ['id' => 1])}}"><button class="btn btn-primary btn">Modificar Responsables</button></a>
			</div>
			<!-- Start Formoid form-->
		</div>
       <script> $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    }); 
       </script>
       
	</body>
</HTML>















































@endsection