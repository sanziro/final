<html>
    <head>
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.js') }}
      
        {{ HTML::script('js/bootstrap2.min.js') }}
        {{-- HTML::script('js/boostrap-modal.js') --}}
        {{ HTML::script('js/bootstrap-datepicker.js') }}
              <script>
                  function salir(){
                      location.href="frontend_controller.php?flag=true";
                  }
              </script>
              {{ HTML::style('css/font-awesome.min.css') }}
          <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

               {{ HTML::style('css/abm.css') }}
        <title>Escuela Graduada Joaquín V. González</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         {{ HTML::style('css/Styles-m1.css') }}
         {{ HTML::style('css/Styles-m2.css') }}
         {{ HTML::style('css/bootstrap.css') }}
       {{ HTML::script('js/jquery.min.js') }}
         {{ HTML::script('js/jquery.multiple.select.js') }}
         
  {{ HTML::script('js/bootstrap.min.js') }}
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		{{ HTML::style('css/bootstrap.css') }}
        <link rel="shortcut icon" href="../images/JoaquinVGonzalez222.ico">
				{{ HTML::style('css/bootstrap-theme.css') }}
		
				
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				 
				  {{--HTML::style('css/bootstrap-select.css') --}}
				 
				  
		{{ HTML::style('leaflet/leaflet.css') }}					
		 {{ HTML::script('leaflet/leaflet.js') }}
                {{ HTML::script('leaflet/geocoder/Control.Geocoder.js') }}
                {{ HTML::style('leaflet/routing/leaflet-routing-machine.css') }}
                 {{ HTML::style('leaflet/geocoder/Control.Geocoder.css') }}
                
    </head>
    <body>
        @include('navbar')
        <div class="real-Body">
            <div class="lineal-banner">
            {{ HTML::image('images/banner.png', 'banner', array( 'id' => 'banner-v1', 'title' => 'banner' )) }}
             {{ HTML::image('images/escudo-UNLP.jpg.png', 'escudo', array( 'id' => 'escudoUNLP-v1', 'title' => 'escudo' )) }}
            
            <div class="text-tittle">{{$titulo}}</div>    <!--Escuela Graduada Joaquín V. González-->
        </div>

        <div class="container">
            @yield('content')
            
        </div>
        <footer>{{$contacto}}</footer>
        </div>


    </body>
</html>
