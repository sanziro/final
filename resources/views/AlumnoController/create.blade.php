
@extends('layouts.indexLogued')

@section('content')
  
		<div class="contenedor_formulario">
			<div class="container">
			  <h2>Alta Alumnos</h2>
			  {{-- {% if fallo %} <div class="alert alert-danger alert-dismissable">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>El DNI ya existe.</strong> Intente nuevamente.
						</div>  {% endif %}
				{% if acerto %}
				    <div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>El Alumno</strong> se agrego correctamente.
				</div>
				{% endif %}
                                
                                {% if fallo_usuario %} <div class="alert alert-danger alert-dismissable">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>El Nombre de Usuario ya existe.</strong> Intente nuevamente.
						</div>  {% endif %}
                                
                                
                                {% if fallo_responsable %} <div class="alert alert-danger alert-dismissable">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>El EMAIL ya existe.</strong> Intente nuevamente.
						</div>  {% endif %}
				{% if acerto_responsable %}
				    <div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>El Responsable</strong> se agrego correctamente.
				</div>
				{% endif %}--}}

			 {{Form::open(array('action' => 'AlumnoController@store', 'id'=>"myform",'name'=>'alumno[]'))}}
			     <div class="form-group">
			      <label for="imput-adminconfig-nombre">Nombre:</label>
			      <input id="imput-adminconfig-nombre" type="text" class="form-control" name="alumno[nombre]" placeholder="Introduzca su Nombre" pattern="[A-Za-z' ']{4,10}" required>
			    </div>
			    <div class="form-group">
			      <label for="imput-adminconfig-apelido">Apellido:</label>
			      <input id="imput-adminconfig-apelido" type="text" class="form-control" name="alumno[apellido]" placeholder="Introduzca su Apellido"  pattern="[A-Za-z' ']{4,10}" required>
			    </div>
			    <div class="form-group">
			      <label for="imput-adminconfig-mail">Email:</label>
			      <input id="imput-adminconfig-mail" type="email" class="form-control" name="alumno[mail]" placeholder="Introduzca su Email" required>
			    </div>
			     <div class="form-group">
			      <label for="imput-adminconfig-dni">DNI:</label>
			      <input id="imput-adminconfig-dni" type="number" class="form-control" name="alumno[numeroDoc]" placeholder="Introduzca su DNI" required>
			    </div>
			    <div class="form-group">
			      <label for="imput-adminconfig-sexo">Sexo:</label>
			    <div class="form-group">
					  <select id="imput-adminconfig-sexo" class="form-control" id="sexo" name="alumno[sexo]" required>
					    <option>Masculino</option>
					    <option>Femenino</option>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label for="date-nacimiento">Fecha de Nacimiento:</label>
                <div class='input-group date date' id='date-nacimiento' >
                    <input type='date' class="form-control" name="alumno[fechaNacimiento]" required/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            	<div class="form-group">
					<label for="date-ingreso">Fecha de Ingreso:</label>
                <div class='input-group date' id='date-ingreso'  >
                    <input type='date' class="form-control" name="alumno[fechaIngreso]" required/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            	<div class="form-group">
					<label for="date-egreso">Fecha de Egreso:</label>
                <div class='input-group date' id='date-egreso' >
                    <input type='date' class="form-control" name="alumno[fechaEgreso]"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
               	 </div>
            	</div>
            {{--	<DIV class="contenedorMapa"> <div id="map" style="width: 400px; height: 200px"></div></DIV>
                              
                                        

                                        <div class="form-group">
                                                                <label class="col-md-4 control-label" for="direccion">Dirección</label>		
                                                               
                                                                        <input class="form-control input-md"  placeholder="Marque su direccion en el mapa..." id="direccion" name="direccion" type="text" readonly required><br>
                                                                        
                                                             
                                                                        <input id="lat" name="latitud" type="hidden" required>
                                                                        <input id="lon" name="longitud" type="hidden" required>
                                                                	
                                                        </div>

                                                      
                                                        <script>
                                                                if (navigator.geolocation) navigator.geolocation.getCurrentPosition(crearMapa);

                                                                function crearMapa(position) {
                                                                        miLat = position.coords.latitude;
                                                                        miLon = position.coords.longitude;
                                                                        var map = L.map('map').setView([miLat,miLon], 18),
                                                                                geocoder = L.Control.Geocoder.nominatim(),
                                                                                control = L.Control.geocoder({
                                                                                        geocoder: geocoder
                                                                                }).addTo(map),marker;

                                                                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

                                                                        map.on('click', function(e) {
                                                                                geocoder.reverse(e.latlng, map.options.crs.scale(map.getZoom()), function(results) {
                                                                                        var r = results[0];
                                                                                        if (r) {
                                                                                                if (marker) {
                                                                                                        marker.
                                                                                                                setLatLng(e.latlng).
                                                                                                                setPopupContent(r.name).
                                                                                                                openPopup();
                                                                                                } else {
                                                                                                        marker = L.marker(e.latlng).bindPopup(r.name).addTo(map).openPopup();
                                                                                                }

                                                                                                document.getElementById("lat").value = e.latlng.lat;
                                                                                                document.getElementById("lon").value = e.latlng.lng;
                                                                                        }
                                                                                })
                                                                        });

                                                                        map.on('popupopen', function(e) {
                                                                                var div = document.createElement("div");
                                                                                div.innerHTML = e.popup.getContent();
                                                                                var text = div.textContent || div.innerText || "";

                                                                                document.getElementById("lat").value = e.popup.getLatLng().lat;
                                                                                document.getElementById("lon").value = e.popup.getLatLng().lng;
                                                                                document.getElementById("direccion").value = text;
                                                                        });
                                                                }
                                                        </script>--}}
			    
			{{ Form::submit('Agregar',array('class'=>"btn btn-primary btn"))}}
			 {{Form::close()}}
			
            	{{-- <div class="form-group">
        <label>Asignar Responsable/s</label>
       <select id="ms" multiple="multiple" name="responsables[]" required>
					  	{% for responsable in responsables %}
					  		<option value="{{ responsable.id }}" >{{ responsable.nombre}} {{ responsable.apellido}} {{ responsable.telefono}} {{ responsable.direccion}} {{responsable.mail}}</option>
					  	{% endfor %}
					  </select>
    </div>
            	<div class="form-group">
					   
				</div>
			<div class="botonesadminsitraciondeusuarios">
			    <button type="submit" class="btn btn-primary btn">Agregar</button>
			     </form>
                 <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
	  			Agregar Responsable
				</button>
				</div>


			 
			  {% include 'modal_responsable.html'%}
			</div>
			<!-- Start Formoid form-->
		</div> 
			<script>
			 $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    }); </script>
        <script>
        $('#myform').validate({
    rules: {
        "responsables[]": "required"
    }
});
</script>--}} 

@endsection

		
		 

						
						
