	<div id="sidebar-right">
		<h3>Notificaciones</h3>
		<?php
		if(isset($_SESSION['newSeguidores'])) echo  "Nuevos seguidores: <b>".$_SESSION['newSeguidores']. "</b>\n";
		else echo ""; 
		if(isset($_SESSION['likes'])) echo "Tienes <b>".$_SESSION['likes']."</b> likes nuevos\n";
		else echo ""; 
		if(isset($_SESSION['mensajes'])) echo "Tienes <b>".$_SESSION['mensajes']."</b> mensajes nuevos\n";
		else echo ""; 
		
		?>
	</div>