	<div id="sidebar-right">
		<h3>Notificaciones</h3>
		<?php
		if(isset($_SESSION['newSeguidores'])) echo  "Nuevos seguidores: <b>".$_SESSION['newSeguidores']. "</b></br>";
		else echo "<br/>"; 
		if(isset($_SESSION['likes'])) echo "Tienes <b>".$_SESSION['likes']."</b> likes nuevos</br>";
		else echo "<br/>";
		if(isset($_SESSION['mensajes'])) echo "Tienes <b>".$_SESSION['mensajes']."</b> mensajes nuevos</br>";
		else echo "<br/>"; 
		
		?>
	</div>