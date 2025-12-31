<?php 
session_start();
?>
<!DOCTYPE html>
<html> <!--  data-bs-theme="dark">-->
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<header>
<div class="header">
	<div class="logo">
		<a href="https://www.ipn.mx" target="_blank"><img src="icons/bank.png" height="60" alt="BANK LOGO"></a>
	</div>
	<a class="title" href="index.php">Sistema de Control de Asistencia</a>
	<div id="fecha">
		<?php
	date_default_timezone_set('America/Mexico_City');
	echo date("Y-m-d")
	?>
	</div>
</div>

<div class="topnav" id="myTopnav">
	<a href="index.php">Lista de Usuarios</a>
    <a href="UsersLog.php">Registro de Asistencia</a>
    <a href="ManageUsers.php">Administración de Usuarios</a>
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
	  <i class="fa fa-bars"></i></a>
</div>
</header>
<script>
	function navFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
</script>
</html>

	

	
