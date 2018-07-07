@extends('layout')

@section('style')
  <link rel="stylesheet" type="text/css" href="css/styleInicio.css">
@endsection

@section('body')

  <span style="display: block; height: 100px;"></span>

  <div id="carouselExampleIndicators" class="carousel slide" data-pause="false" data-ride="carousel" data-interval="3500">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/law1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Civil</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/law2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Comercial</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/law3.jpg" alt="third slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Administrativo</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/law4.jpg" alt="fourth slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Laboral</h1>
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

<div class="container">
  <div class="containerservicios">
    <div class="row">
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Civil
        </h3>
        <p>Mucha sarasa para probar una propiedad de la columna ia tu sabe</p>
        <h6 class="text-right">
          <img src="images/tic2.png">
          Me interesa
        </h6>
      </div>
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Comercial
        </h3>
      </div>
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Administrativo
        </h3>
      </div>
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Familia
        </h3>
      </div>
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Laboral
        </h3>
      </div>
      <div class="col-md-4 col-sm-6 unserv">
        <h3 class="titulo-servicio">
          Sucesiones
        </h3>
      </div>

    </div>
  </div>
</div>
@endsection
