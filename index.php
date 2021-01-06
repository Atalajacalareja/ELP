<?php
session_start();
//require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
    <script>
        var fontSize = 1;
        // funcion para aumentar la fuente
        function zoomIn() {
            fontSize += 0.1;
            document.body.style.fontSize = fontSize + "em";
        }
        // funcion para disminuir la fuente
        function zoomOut() {
            fontSize -= 0.1;
            document.getElementById("button-salir").style.fontSize = fontSize + "em";
        }
    </script>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<title>Portada</title>
</head>

<body>
<?php
	require("includes/comun/cabecera.php");
	require("includes/comun/sidebarIzq.php");

	$cont = isset($_SESSION['cont']) ? $_SESSION['cont'] : 0;

	echo '<div id="contenido">';

	if($cont == 0){
		echo '<h1>Home</h1>';
		echo '<p> Mira que bien se lo estan pasando el resto de usuarios! </p>';
	}
	else{
		if($cont >= 1){
			echo '<h3>Pingüinos</h3>';
			echo '<img src="includes/media/pinguinos.jpg" alt="pingüinos">';
			echo "<br/>";
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 1){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=1", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 2){
			echo '<h3>Mona Lisa!</h3>';
			echo '<img src="includes/media/monalisa.jpg" alt="mona lisa">';
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';
		}

		if($cont >= 3){
			echo '<h3>Pingüinos</h3>';
			echo '<img src="includes/media/pinguinos.jpg" alt="pingüinos">';
			echo "<br/>";
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 3){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=2", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 4){
			echo '<h3>Mona Lisa!</h3>';
			echo '<img src="includes/media/monalisa.jpg" alt="mona lisa">';
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 4){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=3", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 5){
			echo '<h3>Pingüinos</h3>';
			echo '<img src="includes/media/pinguinos.jpg" alt="pingüinos">';
			echo "<br/>";
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';
		}

		if($cont >= 6){
			echo '<h3>Mona Lisa!</h3>';
			echo '<img src="includes/media/monalisa.jpg" alt="mona lisa">';
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 6){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=4", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 7){
			echo '<h3>Pingüinos</h3>';
			echo '<img src="includes/media/pinguinos.jpg" alt="pingüinos">';
			echo "<br/>";
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';
		}

		if($cont >= 8){
			echo '<h3>Mona Lisa!</h3>';
			echo '<img src="includes/media/monalisa.jpg" alt="mona lisa">';
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 8){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=5", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 9){
			echo '<h3>Pingüinos</h3>';
			echo '<img src="includes/media/pinguinos.jpg" alt="pingüinos">';
			echo "<br/>";
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';
		}

		if($cont >= 10){
			echo '<h3>Mona Lisa!</h3>';
			echo '<img src="includes/media/monalisa.jpg" alt="mona lisa">';
			echo '<button id="button-comentario" onclick=location.href="accionSubirFoto.php">Añadir comentario</button>';

			if($cont == 10){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=6", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}
	}
	
	echo '</div>';

?>
	
<?php

	require("includes/comun/sidebarDer.php");
	require("includes/comun/pie.php");

?>


</div>

</body>
</html>
