@extends('layouts.index')

@section('content')
               
<h1 id="letraviscointerner">{{$msj}}</h1>
            
           <div class="login">
               <form method="post" action="../controlador/frontend_controller.php">
			<h2 class="">Inicie sesion</h2>
			<label for="inputEmail" class="text-laber-v1">Nombre de usuario</label>
			<input name="usuario" type="text" id="inputEmail" class="imput-v1" placeholder="Nombre de usuario" required="" autofocus="">
    <!--token lo saque total laravel uso uno propio-->
			<label for="inputPassword" class="text-laber-v1">Contraseña</label>
			<input name="clave" type="password" id="inputPassword" class="imput-v1" placeholder="Contraseña" required="">

      <!-- {% if fallo %} <div class="alert alert-danger" role="alert">Convinacion erronea. Intente nuevamente</div> {% endif %}-->

               <button class="button-login" type="submit">Iniciar sesion</button></form></div>









       
@endsection