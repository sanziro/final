@extends('layouts.indexLogued')

@section('content')
       <div class="main_container">
            <div class="contents">
                <ul>
</ul>    @if ($alumnos->count() > 0 )
            <table class="table table-striped" >

          <caption ><h4>Alumnos activos en el sistema</h4></caption>
            <thead>

              {{--{% if elimino_alumno %}
               <div class="alert alert-success alert-dismissable">
  					          <button type="button" class="close" data-dismiss="alert">&times;</button>
					            <strong>El Alumno </strong> se elimino correctamente.
						  </div>  {% endif %}  --}}

          <tr>
            <th id='col_dni'>Nº de documento</th>
            <th id='col_ape' >Apellido</th>
            <th id='col_nom' >Nombre</th>
              <th class="fecha_en_tabla" id='col_fecnac'>Nacimiento</th>
              <th id='col_sexo'>Sexo</th>
              <th id='col_email'>Email</th>
              <th id='col_dire'>Dirección</th>
              <th class="fecha_en_tabla" id='col_fecing'>Ingreso</th>
               <th class="fecha_en_tabla" id='col_feceg'>Egreso</th>
            <th id='col_acc'>Acciónes</th>
          </tr>
        </thead>
       @foreach ($alumnos as $alumno)
         <tr>
          <td headers='col_dni'>{{$alumno->numeroDoc }}</td>
          <td headers='col_ape'>{{$alumno->apellido }}</td>
          <td headers='col_nom'>{{$alumno->nombre }}</td>
          <td  headers='col_fecnac'>{{$alumno->fechaNacimiento }}</td>
          <td headers='col_sexo'>{{$alumno->sexo }}</td>
          <td headers='col_email'>{{$alumno->mail }}</td>
          <td headers='col_dire'>{{$alumno->direccion }}</td>
          <td headers='col_fecing'>{{$alumno->fechaIngreso }}</td>
          <td  headers='col_feceg'>{{$alumno->fechaEgreso }}</td>
          <td  headers='col_acc'>
             <a href="/alumno/{{$alumno->id}}" <img class='iconoListado' alt='Ver mas información del alumno' title='Ver mas información del alumno' src='images/iconoInfo.png'></a>
            <a href="/alumno/{{$alumno->id}}/edit"> <img class='iconoListado' alt='Modificar la información del alumno' title='Modificar la información del alumno' src='images/iconoModif.png'></a>
            <img class='iconoListado' alt='Eliminar alumno' title='Eliminar alumno' src='images/iconoElim.png'>



            </td>
        </tr>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id='{{$alumno->id }}' aria-labelledby="myLargeModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myLargeModalLabel">Confirme eliminación del alumno {{$alumno->nombre }} {{$alumno->apellido }} </h4>
                </div>
                <div class="modal-body">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>

                      <a href="alumno/{{$alumno->id}}/delete"><button class="btn btn-danger">Confirmar</button></a>

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
       @endforeach
    </table>
    {{$alumnos}}
        @else

            <h3>No hay alumnos registrados</h3>

         @endif

             </div>

        </div>

@endsection
