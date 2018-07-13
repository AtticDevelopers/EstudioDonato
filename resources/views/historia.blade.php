@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/historia-style.css">
@endsection


@section('body')
<div class="container">
   <div class="row">
      <div class="col-md-1">
         <ul class="left-slider">
            <li><a href="#inicio" id="li-inicio"> Inicio </a></li>
            <li><a href="#evolucion" id="li-evolucion"> Evolución </a></li>
            <li><a href="#actualidad" id="li-actualidad"> Actualidad </a></li>
         </ul>
      </div>
      <div class="col-md-11 cointainer-secciones">
         <!-- <div class="separador-secciones" id="inicio"> Separador </div> -->
         <div class="seccion-texto" id="inicio">
            <h3 class="seccion-titulo">Inicio</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="https://images.adsttc.com/media/images/55e6/2d62/2347/5d07/9c00/0224/large_jpg/curacavi_skp_110816.jpg?1441148252" alt="">
            <br>
            <p>Texto resumido que hable acerca de cómo surgió el estudio [Con leer más se iría al documento entero]</p>
         </div>
         <!-- <div class="separador-secciones" id="evolucion"> Separador </div> -->
         <div class="seccion-texto" id="evolucion">
            <h3 class="seccion-titulo">Evolución</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://guialacalera.com.ar/wp-content/uploads/2015/06/Estudio-Jur%C3%ADdico-Marcela-In%C3%A9s-Turanzas-Asociados-La-Calera.jpg" alt="">
            <br>
            <p>Texto resumido que hable de cómo fue evolucionando el estudio a través de los años [Con leer más se iría al documento entero]</p>
         </div>
         <!-- <div class="separador-secciones" id="actualidad"> Separador </div> -->
         <div class="seccion-texto" id="actualidad">
            <h3 class="seccion-titulo">El estudio hoy</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://www.law.fsu.edu/images/default-source/header-images/mocktrial.jpg?sfvrsn=2" alt="">
            <br>
            <p>Texto resumido que hable de cómo se encuentra el estudio en la actualidad [Con leer más se iría al documento entero]</p>
         </div>
      </div>


   </div>
   <!-- /.row -->

</div>
<!-- /.container -->
@endsection

