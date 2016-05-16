<html>
    <head>
        <title>Escuela Graduada Joaquín V. González</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href='css/Styles-m1.css'>
        <link rel="stylesheet" href='css/bootstrap.css'>
    </head>
    <body>
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