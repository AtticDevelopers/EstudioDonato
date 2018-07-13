@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/historia-style.css">
@endsection


@section('body')
<div class="container">
   <div class="row">
      <div class="col-md-1">
         <ul class="left-slider">
            <li><a href="#inicio"> Inicio </a></li>
            <li><a href="#evolucion"> Evolución </a></li>
            <li><a href="#actualidad"> Actualidad </a></li>
         </ul>
      </div>
      <div class="col-md-11 cointainer-secciones">
         <!-- <div class="separador-secciones" id="inicio"> Separador </div> -->
         <div class="seccion-texto" id="inicio">
            <h3 class="seccion-titulo">Inicio</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            <br>
            <p>Texto resumido que hable acerca de cómo surgió el estudio [Con leer más se iría al documento entero]</p>
         </div>
         <!-- <div class="separador-secciones" id="evolucion"> Separador </div> -->
         <div class="seccion-texto" id="evolucion">
            <h3 class="seccion-titulo">Evolución</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            <br>
            <p>Texto resumido que hable de cómo fue evolucionando el estudio a través de los años [Con leer más se iría al documento entero]</p>
         </div>
         <!-- <div class="separador-secciones" id="actualidad"> Separador </div> -->
         <div class="seccion-texto" id="actualidad">
            <h3 class="seccion-titulo">El estudio hoy</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            <br>
            <p>Texto resumido que hable de cómo se encuentra el estudio en la actualidad [Con leer más se iría al documento entero]</p>
         </div>
      </div>


   </div>
   <!-- /.row -->

</div>
<!-- /.container -->
@endsection

