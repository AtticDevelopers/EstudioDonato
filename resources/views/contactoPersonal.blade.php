@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/contactopersonal-style.css">
@endsection

@section('body')
<div class="container">
  <!-- Content Row -->
  <div class="row" id="mainContacto">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Photo -->
      <img class="rounded-circle img-fluid d-block mx-auto responsive" src="http://placehold.it/200x200" alt="Foto Abogado">
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
      <h3>{{$especialista->nombre}} {{$especialista->apellido}}</h3>
      <p>
        España 431
        <br>Bahia Blanca, Buenos Aires 8000
        <br>
      </p>
      <p>
        <abbr title="Telefono">T</abbr>:{{$especialista->telefono}}
      </p>
      <p>
        <abbr title="Email">E</abbr>:
        <a href="mailto:name@example.com">{{$especialista->email}}
        </a>
      </p>
      <p>
        <abbr title="Horas">H</abbr>: Luners - Viernes: 8:00 a 18:00
      </p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <div class="row">
    <div class="col-lg-6 mb-4">
      <h3>Dejale tu mensaje</h3>
      <form name="sentMessage" id="contactForm" method="POST" action="./contactopersonal" novalidate >
        {{ csrf_field() }}
        <div class="control-group form-group">
          <div class="controls">
            <label>Nombre completo: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required data-validation-required-message="Nombre requerido.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Telefono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required data-validation-required-message="Telefono requerido.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email:</label>
            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Email requerido.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Mensaje:</label>
            <textarea rows="10" cols="100" class="form-control" id="mensaje" name="mensaje" required data-validation-required-message="Deje su mensaje" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
