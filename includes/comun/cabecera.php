<div id="cabecera">
	<h1 style='font-size: 30px'>World's best social media</h1>
	<div class="saludo">
	<?php
	$tamano = 20;
	if(isset($_SESSION['cont'])) {
		$tamano -= $_SESSION['cont'];
		if($tamano <= 0) {
			echo "<div id='nombre-app' style='font-size: 19px;'>Bienvenido de nuevo, usuario</div>";
		}
		else {
			echo "<div id='nombre-app' style='font-size: 19px;'>Bienvenido de nuevo, usuario</div>";
			echo "<button id='button-salir'  style='font-size: ".$tamano."px; FONT-FAMILY: Verdana;'>Salir</button>";
		}
	}
	else {
		echo "<div id='nombre-app' style='font-size: 19px;'>Bienvenido de nuevo, usuario</div>";
		echo "<button id='button-salir'  style='font-size: ".$tamano."px; FONT-FAMILY: Verdana;'>Sali</button>";
	}
	?>
	</div>
</div>

