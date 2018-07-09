@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/especialistas-style.css">
@endsection



@section('body')
<!-- Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="my-4" id="seccion-areas">Especialistas
      <small>Clasificación por áreas</small>
   </h1>

   <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-200">
            <img class="card-img-top" src="images/law1.jpg" alt="">
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoCivil" aria-expanded="false" aria-controls="textoCivil">
                     Civil
                  </div>
               </h4>
               <div class="collapse" id="textoCivil">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <img class="card-img-top" src="images/law2.jpg" alt="">
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoComercial" aria-expanded="false" aria-controls="textoComercial">
                     Comercial
                  </div>
               </h4>
               <div class="collapse" id="textoComercial">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
            <img class="card-img-top" src="images/law3.jpg" alt=""> 
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area" type="button" data-toggle="collapse" data-target="#textoAdministrativo" aria-expanded="false" aria-controls="textoAdministrativo">
                     Administrativo
                  </div>
               </h4>
               <div class="collapse" id="textoAdministrativo">
                  <p class="card-text">Profesional: Donato, Ramiro</p>
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
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
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
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
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
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
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
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
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
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
                  <a href="#seccion-especialistas"> <p class="contactar-profesional">Contactar</p></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->

   <!-- Introduction Row -->
   <h1 class="my-4" id="seccion-especialistas">Especialistas
      <small>Clasificación por profesional</small>
   </h1>
   <!-- Team Members Row -->
   <div class="row">
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3>Donato, Ramiro
            <small>Job Title</small>
         </h3>
         <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
         <div class="btn btn-primary btn-contactar-profesional responsive" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3>Donato, Rodrigo
            <small>Job Title</small>
         </h3>
         <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3>Donato, Rocío
            <small>Job Title</small>
         </h3>
         <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3>Rodriguez, Flavia
            <small>Job Title</small>
         </h3>
         <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="https://scontent.fbhi1-1.fna.fbcdn.net/v/t1.0-9/13902796_10210214959111016_4547269968658509038_n.jpg?_nc_cat=0&oh=7231f6adb159b6319f9ef9d53831b31b&oe=5BE2F2DD" alt="">
         <h3>Mancini, Lautaro 
            <small>Demonio</small>
         </h3>
         <p>Fortnite Gammer - PS4 - Pro - Streamer on Youtube and Twitch</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3>Juan Perez
            <small>Job Title</small>
         </h3>
         <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
   </div>

</div>
<!-- /.container -->

@endsection

