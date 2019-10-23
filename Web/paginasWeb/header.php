<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: right;">
		<?php
		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['nombre'])){
			echo "<a href='./services/logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;";
		}else{
			header("Location: ./index.php");
		}
		?>
	</div> 
</body>
</html>