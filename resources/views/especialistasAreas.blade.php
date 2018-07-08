@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/especialistas-style.css">
@endsection



@section('body')
<!-- Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="my-4">Especialistas
      <small>Clasificación por áreas</small>
   </h1>

   <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law1.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoCivil" aria-expanded="false" aria-controls="textoCivil">
                     Civil
                  </div>
               </h4>
               <div class="collapse" id="textoCivil">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law2.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoComercial" aria-expanded="false" aria-controls="textoComercial">
                     Comercial
                  </div>
               </h4>
               <div class="collapse" id="textoComercial">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law3.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoAdministrativo" aria-expanded="false" aria-controls="textoAdministrativo">
                     Administrativo
                  </div>
               </h4>
               <div class="collapse" id="textoAdministrativo">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law4.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoFamilia" aria-expanded="false" aria-controls="textoFamilia">
                     Familia
                  </div>
               </h4>
               <div class="collapse" id="textoFamilia">
                  <p class="card-text">Profesional: Donato, Rocío</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/law1.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoLaboral" aria-expanded="false" aria-controls="textoLaboral">
                     Laboral
                  </div>
               </h4>
               <div class="collapse" id="textoLaboral">
                  <p class="card-text">Profesional: Donato, Rodrigo</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law2.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoSucesiones" aria-expanded="false" aria-controls="textoSucesiones">
                     Sucesiones
                  </div>
               </h4>
               <div class="collapse" id="textoSucesiones">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law3.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoPrevisional" aria-expanded="false" aria-controls="textoPrevisional">
                     Previsional
                  </div>
               </h4>
               <div class="collapse" id="textoPrevisional">
                  <p class="card-text">Profesional: Rodriguez, Flavia</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <a><img class="card-img-top" src="images/law4.jpg" alt=""></a>
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoMediacionPrejudicial" aria-expanded="false" aria-controls="textoMediacionPrejudicial">
                     Mediacion Prejudicial
                  </div>
               </h4>
               <div class="collapse" id="textoMediacionPrejudicial">
                  <p class="card-text">Profesionales: No es área específica</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->

</div>
<!-- /.container -->

@endsection
