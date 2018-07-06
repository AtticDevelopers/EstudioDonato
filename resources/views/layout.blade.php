<!DOCTYPE html>
<html>
<head>
	<title>Estudio Donato</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- Nuestro CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	@yield('style')

</head>
<body>
	<div id="header">
		
		<nav class="navbar navbar-expand-lg">
			<a href="./">
				<img id="logo" src="images/logo.jpg" alt="Estudio Donato">
			</a>
			<div class="container collapse navbar-collapse d-flex justify-content-center">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="./">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./historia">Historia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./especialistas">Especialistas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div id="section">
		@yield('body')
	</div>

	<div id="footer">
		<div class="contacto">
			<i class="fas fa-phone"></i> 
			(291) 123456
			<i class="fas fa-map-marker-alt"></i>
			Direccion 123
		</div>
		<div class="copyright">
			<i class="far fa-copyright"></i>
			Coypright Attic Devs.
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</div>
</body>
</html>