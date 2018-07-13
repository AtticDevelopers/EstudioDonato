@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/inicio-style.css">
@endsection

@section('body')

<header>
   <div id="carouselExampleIndicators" class="carousel slide" data-pause="false" data-ride="carousel" data-interval="3500">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item active">
            <img class="d-block w-100" src="images/law1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>First Slide</h3>
               <p>This is a description for the first slide.</p>
            </div>
         </div>
         <!-- Slide Two - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100" src="images/law2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>Second Slide</h3>
               <p>This is a description for the second slide.</p>
            </div>
         </div>
         <!-- Slide Three - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100" src="images/law3.jpg" alt="third slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>Third Slide</h3>
               <p>This is a description for the third slide.</p>
            </div>
         </div>
         <!-- Slide four - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100" src="images/law4.jpg" alt="fourth slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>Third Slide</h3>
               <p>This is a description for the third slide.</p>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</header>

<!-- Page Content -->
<section class="py-5">
   <div class="container">
      <h1 class="tituloinicio">Nuestros Servicios</h1>
      <p class="copetetitulo">Especialistas en cada una de las areas. Años de trayectoria para su seguridad y confianza.</p>
   </div>
</section>

<div class="container">
   <div class="row">
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Civil</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que versa sobre los vínculos personales y/ó patrimoniales entre particulares.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Comercial</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que se ocupa del ejercicio profesional del comercio, los actos y las relaciones jurídicas derivadas de la realización de aquél.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Administrativo</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que rige la relación entre los particulares y el Estado.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Familia</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que regula las relaciones personales y patrimoniales de los integrantes de la familia, entre sí y respecto de terceros.</p>
               <a  href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Laboral</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que se encarga de regir las relaciones jurídicas entre empleadores y empleados.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Sucesiones</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que versa sobre las relaciones jurídicas y las situaciones con posterioridad al fallecimiento de las personas.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>

      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Previsional</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es la rama del derecho que regula lo atinente a las jubilaciones, pensiones, etc.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>

      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">Mediación Prejudicial</h3>
               <h6 class="card-subtitle mb-2 text-muted"></h6>
               <p class="card-text">Es un proceso informal, confidencial y que resulta necesario transitar con anterioridad a la apertura de la instancia judicial.</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>

            </div>
         </div>
      </div>

   </div>
</div>
@endsection
