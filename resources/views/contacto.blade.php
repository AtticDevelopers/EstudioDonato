@extends('layout')
@section('style')
  <!-- CSS contacto -->
	<link rel="stylesheet" type="text/css" href="css/contact-style.css">
@endsection
@section('body')
	<!-- Page Content -->
	<div class="container" style="margin-top: 70px;">

		<!-- Content Row -->
		<div class="row">
			<!-- Map Column -->
			<div class="col-lg-8 mb-4" id="map">
				<!-- Embedded Google Map -->
			</div>
			<!-- Contact Details Column -->
			<div class="col-lg-4 mb-4">
				<h3>Oficina Bahia Blanca</h3>
				<p>
					Espana 431
					<br>Bahia Blanca, Buenos Aires 8000
					<br>
				</p>
				<p>
					<abbr title="Telefono">Tel</abbr>: (291) 456-7890
				</p>
				<p>
					<abbr title="Email">Mail</abbr>:
					<a href="mailto:name@example.com">contaco@estudiodonato.com
					</a>
				</p>
				<p>
					<abbr title="Horario">Horario</abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM
				</p>
			</div>
		</div>
		<!-- /.row -->

		<!-- Contact Form -->
		<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
		<div class="row">
			<div class="col-lg-8 mb-4">
				<h3>Dejanos tu mensaje para coordinar un encuentro</h3>
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="control-group form-group">
						<div class="controls">
							<label>Nombre completo:</label>
							<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Numero telefono:</label>
							<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Mail:</label>
							<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Mensaje:</label>
							<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar mensaje</button>
				</form>
			</div>

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->


	<!-- Contact form JavaScript -->
	<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
	<script src=js/contacto.js></script>
	<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1NEVvUku-j3rt90MdOVQBNNxW7PMlTck&callback=initMap">
  </script>
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

</body>
@endsection
