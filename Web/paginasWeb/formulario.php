<!DOCTYPE html>
<html>
<head>
	
		<title>Galeria</title>

    	<link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="icon" type="image/png" href="logo.png">
        <script type="text/javascript" src="validacion.js"></script>

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

  		<p class="insertar1" id="mensaje"></p>


  		<form <?php echo 'action="formulario.proc.php?id_insertar='.$id_insert.'"' ?> onsubmit="return subir()" method="POST" name="formulario" enctype="multipart/form-data">
		<br>
		<!--Campo Nombre-->

		<input class="form_nom" id="user" type="text" placeholder="Nombre" name="nombre">
		<br>
		<br>
		<br>
		<!--Campo Archivo-->		
		<input class="selec_img" id="file" type="file" id="foto" name="foto" lang="es">	
		<br>
		<!--Boton enviar-->		
		<input class="send" type="submit" value="Enviar" >

	</form>
</html>