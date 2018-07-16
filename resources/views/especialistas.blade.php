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

         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoCivil" aria-expanded="false" aria-controls="textoCivil">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Civil
               </div>
            </h4>
            <div class="collapse" id="textoCivil">
               <p class="card-text">
                  Es la rama del derecho que versa sobre los vínculos personales y/ó patrimoniales entre particulares, contemplando sus derechos y obligaciones. Abarca las situaciones de la más variada índole, incluyendo desde un contrato de locación de una propiedad a la responsabilidad que se origine con motivo de un accidente de tránsito.
                  <br>
                  <br>
                  Especialista: Donato, Ramiro
               </p>
               <a href="#donato-ramiro" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Ramiro?</p></a>
            </div>
         </div>

      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">

         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoComercial" aria-expanded="false" aria-controls="textoComercial">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i> Comercial
               </div>
            </h4>
            <div class="collapse" id="textoComercial">
               <p class="card-text">
                  Es la rama del derecho que se ocupa del ejercicio profesional del comercio, los actos y las relaciones jurídicas derivadas de la realización de aquél.
                  <br>
                  <br>
                  Especialista: Donato, Ramiro
               </p>
               <a href="#donato-ramiro" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Ramiro?</p></a>
            </div>

         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoAdministrativo" aria-expanded="false" aria-controls="textoAdministrativo">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Administrativo
               </div>
            </h4>
            <div class="collapse" id="textoAdministrativo">
               <p class="card-text">
                  Es la rama del derecho que rige la relación entre los particulares y el Estado en sus diversas manifestaciones (Nacional, Provincial y Municipal).
                  <br>
                  <br>
                  Especialista: Donato, Ramiro
               </p>
               <a href="#donato-ramiro" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Ramiro?</p></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoFamilia" aria-expanded="false" aria-controls="textoFamilia">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Familia
               </div>
            </h4>
            <div class="collapse" id="textoFamilia">
               <p class="card-text">
                  Es la rama del derecho que regula las relaciones personales y patrimoniales de los integrantes de la familia, entre sí y respecto de terceros. Por ejemplo, divorcios, cuestiones alimentarias, de comunicación con los hijos, entre otras.
                  <br>
                  <br>
                  Especialista: Donato, Rocío
               </p>
               <a href="#donato-rocio" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Rocío?</p></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoLaboral" aria-expanded="false" aria-controls="textoLaboral">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Laboral
               </div>
            </h4>
            <div class="collapse" id="textoLaboral">
               <p class="card-text">
                  Es la rama del derecho que se encarga de regir las relaciones jurídicas entre empleadores y empleados y los eventuales conflictos que pudieran surgir entre ellos. Específicamente, cuestiones relativas a contrataciones de personal, despidos, licencias, etc.
                  <br>
                  <br>
                  Especialista: Donato, Rodrigo
               </p>
               <a href="#donato-rodrigo" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Rodrigo?</p></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="images/" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoSucesiones" aria-expanded="false" aria-controls="textoSucesiones">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Sucesiones
               </div>
            </h4>
            <div class="collapse" id="textoSucesiones">
               <p class="card-text">
                  Es la rama del derecho que versa sobre las relaciones jurídicas y las situaciones con posterioridad al fallecimiento de las personas y/ó previendo éste (Verbigracia: procesos sucesorios, exista ó no testamento).
                  <br>
                  <br>
                  Especialista: Donato, Ramiro
               </p>
               <a href="#donato-ramiro" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Donato, Ramiro?</p></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoPrevisional" aria-expanded="false" aria-controls="textoPrevisional">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Previsional
               </div>
            </h4>
            <div class="collapse" id="textoPrevisional">
               <p class="card-text">
                  Es la rama del derecho que regula lo atinente a las jubilaciones, pensiones y restantes prestaciones derivadas de la mayor edad de las personas ó de situaciones específicas que afecten a las mismas.
                  <br>
                  <br>
                  Especialista: Rodriguez, Flavia
               </p>
               <a href="#rodriguez-flavia" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es Rodriguez, Flavia?</p></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
         <img class="card-img-top" src="" alt="">
         <div class="card-body">
            <h4 class="card-title">
               <div class="btn btn-primary btn-area collapsed" type="button" data-toggle="collapse" data-target="#textoMediacionPrejudicial" aria-expanded="false" aria-controls="textoMediacionPrejudicial">
                  <i class="fa fa-fw fa-chevron-down"></i>
                  <i class="fa fa-fw fa-chevron-right"></i>Mediacion Prejudicial
               </div>
            </h4>
            <div class="collapse" id="textoMediacionPrejudicial">
               <p class="card-text">
                  Es un proceso informal, confidencial, autocompositivo y que resulta necesario transitar con anterioridad a la apertura de la instancia judicial en los casos en que la legislación aplicable así lo disponga (ley 13.951).
                  <br>
                  <br>
                  Especialistas: No es área específica</p>
               <a href="#seccion-especialistas" style="text-decoration: none;"> <p class="contactar-profesional">Conocer especialistas</p></a>
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
      @foreach($especialistas as $especialista)
         <div class="col-lg-4 col-sm-6 text-center mb-4" id="donato-ramiro">
            <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="Foto Abogado">
            <h3 class="nombre-especialista">{{$especialista->apellido}}, {{$especialista->nombre}}
              <br>
              <small class="rol-especialista">Abogado</small>
           </h3>
           <p>{{$especialista->email}}</p>
           <a class="btn btn-primary btn-contactar-profesional responsive" id="{{$especialista->id}}" type="button" href="./contactopersonal?id={{$especialista->id}}">Contactar</a>
         </div>
      @endforeach
      <!-- <div class="col-lg-4 col-sm-6 text-center mb-4" id="donato-ramiro">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3 class="nombre-especialista">Donato, Ramiro
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional responsive" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4" id="donato-rodrigo">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3 class="nombre-especialista">Donato, Rodrigo
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4" id="donato-rocio">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3 class="nombre-especialista">Donato, Rocio
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4" id="rodriguez-flavia">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3 class="nombre-especialista">Rodriguez Flavia
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4" id="mancini-lautaro">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="https://scontent.fbhi1-1.fna.fbcdn.net/v/t1.0-9/13902796_10210214959111016_4547269968658509038_n.jpg?_nc_cat=0&oh=7231f6adb159b6319f9ef9d53831b31b&oe=5BE2F2DD" alt="">
         <h3 class="nombre-especialista"> Mancini, Lautaro
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="">
         <h3 class="nombre-especialista">Perez, Juan
           <br>
            <small class="rol-especialista">Rol</small>
         </h3>
         <p>Información acerca del profesional</p>
         <div class="btn btn-primary btn-contactar-profesional" type="button">
            Contactar
         </div>
      </div> -->
   </div>

</div>
<!-- /.container -->
@endsection
