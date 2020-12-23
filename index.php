<?php
//require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor">

<?php
	require("includes/comun/cabecera.php");
	require("includes/comun/sidebarIzq.php");
?>

	<div id="contenido">
		<h1>Home</h1>
		<p> Mira que bien se lo estan pasando el resto de usuarios! </p>
		
		<div id="posts">
			<h3>Pingüinos</h3>
			<img src="includes/media/pinguinos.jpg" alt="pingüinos">
			<button id=button-comentario>Añadir comentario</button>
			<h3>Mona Lisa!</h3>
			<img src="includes/media/monalisa.jpg" alt="mona lisa">
			<button id=button-comentario>Añadir comentario</button>
			<h3>Pingüinos otra vez</h3>		
			<img src="includes/media/pinguinos.jpg" alt="pingüinos">
			<button id=button-comentario>Añadir comentario</button>

		</div>
	</div>
	
<?php

	require("includes/comun/sidebarDer.php");
	require("includes/comun/pie.php");

?>


</div>

</body>
</html>