<nav id="navbar-configadmin" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../controlador/controlador_login.php">Cooperadora</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{-- {% if tipo == 'administracion' %} --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../controlador/controlador_alta_usuario.php">Agregar usuario</a></li>
            <li><a href="../controlador/controlador_listado_usuarios.php">Listado de usuarios</a></li>
            <!--<li role="separator" class="divider"></li>-->
            
          </ul>
        </li>
        <li><a href="../controlador/controlador_registrarPagoElegirAlumno.php">Registrar pago</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumnos <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="../controlador/controlador_alumno.php">Agregar alumno</a></li>
            <li><a href="../controlador/controlador_listadoAlumnos.php">Listado de alumnos</a></li>
            <!--<li role="separator" class="divider"></li>-->
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuotas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="../controlador/controlador_altaCuota.php">Agregar cuota</a></li>
             <li><a href="../controlador/controlador_administrarCuotas.php">Listado de cuotas</a></li>
            <!--<li role="separator" class="divider"></li>-->
            
          </ul>
        </li>
        
        <li><a href="../controlador/controlador_listadosAlumnosConMatricula.php">Listados Varios</a></li>
          <li><a href="../controlador/ConfigAdmin.php">Configuración</a></li>
         <li><a href="../controlador/mapa.php">Mapa</a></li>
      </ul>
      {{-- {% elseif tipo =='gestion' %}
            <li><a href="../controlador/controlador_registrarPagoElegirAlumno.php">Registrar pago</a></li>
        <li><a href="../controlador/controlador_listadosAlumnosConMatricula.php">Listados Varios</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuotas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="../controlador/controlador_altaCuota.php">Agregar cuota</a></li>
             <li><a href="../controlador/controlador_administrarCuotas.php">Listado de cuotas</a></li>
            <!--<li role="separator" class="divider"></li>-->
            
          </ul>
        </li>
        </ul>
        {% elseif tipo == 'consulta' %}
                <!--cambiar a q mira el tipo consulta en los listados</li>-->
                 <li><a href="../controlador/controlador_listadosAlumnosConMatricula.php">Listados Varios</a></li>
                  </ul>
            {% endif %} --}}
     
      <ul class="nav navbar-nav navbar-right">
        <li><a onclick="salir()">Cerrar sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>