@extends('HomeController.index')

@section('contenido')
<div id="content">
<!-- se puede usar 'action' => 'LoginController@doLogin' pero no anda REVISAR !-->
    <div class="login">
            <h2 class="">Inicie sesion</h2>
            {!! Form::open(array(
                    'url' =>'login',
                    'method' => 'post',

              ))!!}
               <label for="inputEmail" class="text-laber-v1">Nombre de usuario</label>
               <input name="username" type="text" id="inputEmail" class="imput-v1" placeholder="Nombre de usuario" required="" autofocus="">
               <!--token lo saque total laravel uso uno propio-->
               <label for="inputPassword" class="text-laber-v1">Contraseña</label>
               <input name="password" type="password" id="inputPassword" class="imput-v1" placeholder="Contraseña" required="">
   <!-- {% if fallo %} <div class="alert alert-danger" role="alert">Convinacion erronea. Intente nuevamente</div> {% endif %}-->
            <button class="button-login" type="submit">Iniciar sesion</button>

        {!! Form::close() !!}
     </form>
   </div>
</div>
@stop
