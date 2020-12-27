<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/emergentes.css" />
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<title>Alert</title>
</head>

<body>
	<?php

		$id = isset($_GET['id']) ? $_GET['id'] : null;

		if($id == 1){
			echo '<h3>Sigue así</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 2){
			echo '<h3>Eres un maquina</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 3){
			echo '<h3>ahora tienes muchos seguidores</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 4){
			echo '<h3>MDLR brrrrr</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 5){
			echo '<h3>eres muy popular!!!!</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 6){
			echo '<h3>te pasaste el juego</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
	?>

</body>
</html>