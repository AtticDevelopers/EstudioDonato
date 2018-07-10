@extends('layout')
@section('style')
  <!-- CSS contacto -->
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/contact-util-style.css">
		<link rel="stylesheet" type="text/css" href="css/contact-main-style.css">
@endsection
@section('body')
	<!-- Page Content -->

	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<span class="contact100-card-title">
					Oficina Bahia Blanca
				</span>
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Direccion
						</span>

						<span class="txt2">
							España 431, Bahia Blanca, Buenos Aires, 8000
						</span>
						<!-- Map Column -->
					<div id="map">
						<!-- Embedded Google Map -->
					</div>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Llamanos
						</span>

						<span class="txt3">
							(291) 455 2257
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Mail de contacto
						</span>

						<span class="txt3">
							contacto@estudiodonato.com
						</span>
					</div>
				</div>
			</div>

			<form class="contact100-form validate-form" method="POST" action="./contacto">
				{{ csrf_field() }}
				<span class="contact100-form-title">
					Contactanos
				</span>

				<label class="label-input100" for="first-name">Dejanos tu nombre *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="nombre" placeholder="Nombre">

				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="apellido" placeholder="Apellido">

				</div>

				<label class="label-input100" for="email">Mail *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Ej. ejemplo@email.com">

				</div>

				<label class="label-input100" for="phone">Ingrese numero de telefono</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="telefono" placeholder="">

				</div>

				<label class="label-input100" for="message">Mensaje *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="mensaje" placeholder="Dejanos tu mensaje"></textarea>

				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar mensaje
					</button>
				</div>
			</form>

		</div>
	</div>

	<div id="dropDownSelect1"></div>


	<script src=js/contacto.js></script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1NEVvUku-j3rt90MdOVQBNNxW7PMlTck&callback=initMap">
	</script>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>
@endsection
