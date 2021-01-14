<div style='font-size: 23px;' id="sidebar-left">
	<ul>
		<ul style='font-size: 30px;'>Seguidores: <?php 
		if(isset($_SESSION['seguidores'])) echo $_SESSION['seguidores'];
		else echo "0"; 
		?>
		</a></ul>
		<ul><button id="button-subir-foto" onclick=location.href="accionSubirFoto.php" style='font-size: 20px; width:160px; height:60px'>Subir foto</button></ul>
	</ul>
	<div style='font-size: 23px;' id="publi">
		<h2 style='font-size: 30px;'>Espacio publicitario</h2>
		Compra el nuevo coso que te hara feliz y mas popular!!!
	</div>
	<!--aqui poner movidas de publi-->
</div>
