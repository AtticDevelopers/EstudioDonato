@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/historia-style.css">
@endsection

@section('body')
<div class="container">

   <!-- Page Heading -->
   <h1 class="my-4">Historia 
      <small>Frase representativa del estudio</small>
   </h1>

   <!-- Project One -->
   <div class="row">
      <div class="col-md-7">
         <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
         </a>
      </div>
      <div class="col-md-5">
         <h3>Inicio</h3>
         <p>Texto resumido que hable acerca de cómo surgió el estudio [Con leer más se iría al documento entero]</p>
         <a class="btn btn-primary btn-leermas" href="./historia/inicio">Leer más</a>
      </div>
   </div>
   <!-- /.row -->

   <hr>

   <!-- Project Two -->
   <div class="row">
      <div class="col-md-7">
         <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
         </a>
      </div>
      <div class="col-md-5">
         <h3>Evolución</h3>
         <p>Texto resumido que hable de cómo fue evolucionando el estudio a través de los años [Con leer más se iría al documento entero]</p>
         <a class="btn btn-primary btn-leermas" href="./historia/evolucion">Leer más</a>
      </div>
   </div>
   <!-- /.row -->

   <hr>

   <!-- Project Three -->
   <div class="row">
      <div class="col-md-7">
         <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
         </a>
      </div>
      <div class="col-md-5">
         <h3>El estudio hoy</h3>
         <p>Texto resumido que hable de cómo se encuentra el estudio en la actualidad [Con leer más se iría al documento entero]</p>
         <a class="btn btn-primary btn-leermas" href="./historia/actualidad">Leer más</a>
      </div>
   </div>
   <!-- /.row -->

   <hr>

   <!-- Project Four -->
   <div class="row">

      <div class="col-md-7">
         <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
         </a>
      </div>
      <div class="col-md-5">
         <h3>Otra sección de interés</h3>
         <p>[Con leer más se iría al documento entero]</p>
         <a class="btn btn-primary btn-leermas" href="">Leer más</a>
      </div>
   </div>
   <!-- /.row -->

   <hr>


</div>
<!-- /.container -->

@endsection
