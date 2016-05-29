@extends('layouts.indexLogued')

@section('content')
            <div class="navbar-lateral">
			<form  action="../controlador/controlador_listadosAlumnosConMatricula.php" method="POST" >
			<div class="imputround-checkbox" ><input type="radio" name="tipodel" value="1"  {%if datospost == 1 %} checked="checked" {% endif%}>Listado de alumnos con matricula paga</div>
			<div class="imputround-checkbox" ><input  type="radio" name="tipodel" value="2" {%if datospost == 2 %} checked="checked" {% endif%}>Listado de cuotas pagadas</div>
      <div class="imputround-checkbox" ><input  type="radio" name="tipodel" value="3" {%if datospost == 3 %} checked="checked" {% endif%}>Listado de cuotas impagas</div>
      {% if tipo == "gestion" %}
      <div class="imputround-checkbox" ><input  type="radio" name="tipodel" value="5" {%if datospost == 5 %} checked="checked" {% endif%}>Monto total de las cuotas por mi</div>
      {% endif %}
      <div class="imputround-checkbox" ><input  type="radio" name="tipodel" value="4" {%if datospost == 4 %} checked="checked" {% endif%}>Monto total de las cuotas por todos</div>
      <input name="token" value="{{token}}" hidden="">
			<button type="submit" id ="boton-consultas-listados" class="btn btn-default ">Listar</button>

			</form>
      {% if datospost != 4  %}
            <a href="../controlador/controlador_listadosAlumnosConMatricula.php?pdf={{datospost}}&token={{token}}" class="classbuttonconvertpdf"><img src="../Imagenes/Adobe_PDF.png" alt="Smiley face" style="    width: 17px;
    margin-right: 3%;" title="icon-pdf">Generar PDF</a>
    {% endif %}
      {% if datospost == 4  %}
              <input type='number' id='anio' style="width: 80%; left: 8%; position: relative; margin-top: 7px;
" value="{{ 'now'|date('Y') }}">
       {% endif %}
           </div>
           
              {% if datospost == 1 %}
              <div class="main-container-tabla">
            <table  id="tabla-consultas-listados" class="table table-striped" >   <!--id='tabla-alumnos'-->

        <thead>
          <tr>
            <th id='col_email'>fecha de inscripcion</th>
            <th id='col_ape' >Apellido</th>
            <th id='col_nom' >Nombre</th>
            <th id='col_monto' >Monto</th>
            <th id='col_nomm' >Comision</th>
            
          </tr>
        </thead>
        {% for alumno in alumnosConMatricula %}
         <tr>
          <td headers='col_email'>{{alumno['fechaAlta']}}</td>
          <td headers='col_ape'>{{alumno['apellido']}}</td>
          <td headers='col_nom'>{{alumno['nombre']}}</td>
          <td  headers='col_monto'>{{alumno['monto']}}$</td>
          <td headers='col_nomm'>{{alumno['comisionCob']}}$</td>
          
        </tr>
    
       {% else %}

                        
                        <h3 id="idmensajeempty">No hay datos para mostrar</h3>
 {% endfor %}
        </table>
        </div>
        
            {% include 'barra_paginacion_consulta.html' %}


            {% elseif datospost == 2 %}
             <div class="main-container-tabla">
                        <table 
                        id="tabla-consultas-listados" class="table table-striped" >   <!--id='tabla-alumnos'-->
                    <thead>
                      <tr>
      
                        <th id='col_ape' >Apellido</th>
                        <th id='col_nom' >Nombre</th>
                        <th id='col_fecnac' >Nro cuota</th>
                        <th id='col_sexo' >Fecha</th>
                        <th id='col_email' >Monto</th> 
                        <th id='col_dire' >Comision</th>
                        <th id='col_diree' >becada</th>
                      </tr>
                    </thead>
                    {% for alumno in alumnosConMatricula %}
                     <tr>
     
                      <td headers='col_ape'>{{alumno['apellido']}}</td>
                      <td headers='col_nom'>{{alumno['nombre']}}</td>
                      <td  headers='col_fecnac'>{{alumno['numero']}}</td>
                      <td headers='col_sexo'>{{alumno['fechaAlta']}}</td>
                      {% if alumno['becado'] == 1 %}
                      <td headers='col_email'>0</td>
                      {% else %}
                      <td headers='col_email'>{{alumno['monto']}}$</td>
                      {% endif %}
                      <td headers='col_dire'>{{alumno['comisionCob']}}$</td>
                      {% if alumno['becado'] == 0 %}
                      <td headers='col_diree'>No</td>
                      {% else %}
                      <td headers='col_diree'>Si </td>
                      {% endif %}
                    </tr>
                
                   {% else %}

                        
                        <h3 id="idmensajeempty">No hay datos para mostrar</h3>
 {% endfor %}
                      </table>
                      </div>
                      {% include 'barra_paginacion_consulta.html' %}

                    {% elseif datospost == 3 %}
                     <div class="main-container-tabla">
                        <table  
                        id="tabla-consultas-listados" class="table table-striped" >   <!--id='tabla-alumnos'-->
                    <thead>
                      <tr>
      
                        <th id='col_fecnac' >Nro cuota</th>
                        <th id='col_dni' >Vencida en:</th>
                        <th id='col_dnii' >Nombre</th>
                        <th id='col_email' >Apellido</th>
                        <th id='col_emaill' >Monto</th>
                        <th id='col_dire' >Comision</th>
                      </tr>
                    </thead>
                    {% for alumno in alumnosConMatricula %}
                     <tr>
     
                      <td  headers='col_fecnac'>{{alumno['numero']}}</td>
                  <td headers='col_dni'>{{alumno['mes']}}/{{alumno['anio']}}</td>
                  <td headers='col_dnii'>{{alumno['nombre']}}</td>
                  <td headers='col_email'>{{alumno['apellido']}}</td>
                  <td headers='col_emaill'>{{alumno['monto']}}$</td>
                  <td headers='col_dire'>{{alumno['comisionCob']}}$</td>    
                    </tr>
                
                   {% else %}

                        
                        <h3 id="idmensajeempty">No hay datos para mostrar</h3>
 {% endfor %}

                      </table>
                      </div>
                {% include 'barra_paginacion_consulta.html' %}
              {% elseif datospost == 5 %}
                     <div class="main-container-tabla">
                        <table  
                        id="tabla-consultas-listados" class="table table-striped" >   <!--id='tabla-alumnos'-->
                    <thead>
                      <tr>
      
                        <th id='col_dire' >Comision</th>
                        <th id='col_dire' >año</th>
                        <th id='col_dire' >mes</th>
                        
                      </tr>
                    </thead>
                    {% for alumno in alumnosConMatricula %}
                     <tr>
     
                      <td  headers='col_fecnac'>{{alumno['0']}}$</td>
                      <td  headers='col_fecnac'>{{alumno['1']}}</td>
                      <td headers='col_dire'>{{alumno['2']}}</td>    
                    </tr>
                
                   {% else %}

                        
                        <h3 id="idmensajeempty">No hay datos para mostrar</h3>
 {% endfor %}

                      </table>
                      </div>
                {% include 'barra_paginacion_consulta.html' %}

              {% elseif datospost == 4 %}
                 <div id="container" style="width:85%; height:400px; left: 15%; position: relative;"></div>
                 <div id="container2" style="width:85%; height:400px; left: 15%; position: relative;"></div>
              {% endif %}
                            

 @endsection