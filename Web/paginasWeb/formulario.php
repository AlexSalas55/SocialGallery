<!DOCTYPE html>
<html>
<head>
	
		<title>Galeria</title>

    	<link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="icon" type="image/png" href="logo.png">

</head>
<body>

	<?php
		$id_insert=$_GET['id_insert'];

	?>

		<div align="center" class="insertar">
			<h1>Insertar Foto</h1>
		</div>
    <!-- Formulario para introducir datos en la Base de Datos -->

  <div align="center">


  		<form <?php echo 'action="formulario.proc.php?id_insertar='.$id_insert.'"' ?> method="POST" name="formulario" enctype="multipart/form-data">
		<br>
		<!--Campo Nombre-->

		<input class="form_nom" type="text" placeholder="Nombre" name="nombre" required="">
		<br>
		<br>
		<br>
		<!--Campo Archivo-->		
		<input class="selec_img" type="file" id="foto" name="foto" lang="es" required="">	
		<br>
		<!--Boton enviar-->		
		<input class="send" type="submit" value="Enviar" >

	</form>
</html>