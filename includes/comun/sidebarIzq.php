<div id="sidebar-left">
	<ul>
		<ul><a href="index.php">Inicio</a></ul>
		<ul><a>Seguidores: </a><?php 
		if(isset($_SESSION['seguidores'])) echo $_SESSION['seguidores'];
		else echo "0"; 
		?>
		</a></ul>
		<ul><button id="button-subir-foto" onclick=location.href="accionSubirFoto.php" style='font-size: 20px; width:160px; height:60px'>Subir foto</button></ul>
	</ul>
	<div id="publi">
		<h2>Espacio publicitario</h2>
		Compra el nuevo coso que te hara feliz y mas popular!!!
	</div>
	<!--aqui poner movidas de publi-->
</div>
