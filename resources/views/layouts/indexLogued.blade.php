<html>
    <head>
      <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap2.min.js"></script>
        <script src="js/boostrap-modal.js"></script>

              <script>
                  function salir(){
                      location.href="frontend_controller.php?flag=true";
                  }
              </script>
              <link rel="stylesheet" href="css/font-awesome.min.css">
          <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
              <link rel="shortcut icon" href="Imagenes/JoaquinVGonzalez222.ico">

              <link rel="stylesheet" href="css/abm.css">
        <title>Escuela Graduada Joaquín V. González</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/JoaquinVGonzalez222.ico">
        <link rel="stylesheet" href='css/Styles-m1.css'>
        <link rel="stylesheet" href='css/Styles-m2.css'>
        <link rel="stylesheet" href='css/bootstrap.css'>
    </head>
    <body>
        @include('navbar')
        <div class="real-Body">
            <div class="lineal-banner">
            <img id="banner-v1" src='images/banner.png' title="banner" alt="banner">
            <img id="escudoUNLP-v1" src='images/escudo-UNLP.jpg.png' alt="escudounlp" title="escudo" >
            <div class="text-tittle">{{$titulo}}</div>    <!--Escuela Graduada Joaquín V. González-->
        </div>

        <div class="container">
            @yield('content')
            <footer>{{$contacto}}</footer>
        </div>

    </body>
</html>
