@extends('layouts.index')

@section('content')
   <div class= 'internal-content'>
               <div class="text">   <strong>Universidad Nacional de La Plata</strong><strong><br>
<strong>Presidente:</strong> Lic. Raúl Anibal Perdomo<br>
<strong>Vicepresidente Área Institucional:</strong> Dr. Fernando A. Tauber<br>
<strong>Vicepresidente Área Académica:</strong> Prof. Ana María Barletta<br>
<strong>Secretaria Académica:</strong> Dra. María Mercedes Medina<br>
<strong>Prosecretaria de Asuntos Académicos:</strong> Prof. Laura Agratti
</strong><p><strong></strong><strong>Escuela Graduada “Joaquín V. González”</strong><br>
<strong>Directora:</strong> Prof. Claudia Beatriz Binaghi<br>
<strong>Vicedirectora: </strong>Prof. Violeta N. Pesci<br>
<strong>Secretaria Docente:</strong> Prof. Mariela Boccia<br>
<strong>Secretaria Académica&nbsp;de Educación&nbsp;Inicial:</strong> Prof. Rosa Mónica Bordagaray<br>
<strong>Secretaria Académica de Educación Primaria:</strong> Prof. Aldana López<br>
<strong>Secretaria Académica de Educación Primaria:</strong> Prof. Celeste Carli<br>
<strong>Regente del turno mañana:</strong> Prof. Elina Rebolini<br>
<strong>Regente del turno tarde:</strong> Prof. Leticia Peret</p>
{{ $descripcion }}
            </div>
               <img id="imagen-para-texto" alt="joaquinGonzalez" src="images/JoaquinVGonzalez22.png" title="joaguin gonzales" >
           </div>
           @yield('contenido')
@endsection
