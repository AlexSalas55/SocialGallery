<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
</head>
<body>
	<div style="text-align: right;">
	<?php
	include "./header.php";
	?>	
	</div>
	<h1>Sitio personal de <?php echo $_SESSION['nombre']; ?></h1>
</body>
</html>