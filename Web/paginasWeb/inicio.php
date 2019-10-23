<!DOCTYPE html>
<html>
<head>
	
		<title>Galeria</title>

    	<link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="icon" type="image/png" href="logo.png">

</head>

	<?php 

		// Datos del Usuario para PHPMyadmin

	  $usuario = "root";
	  $contrasena = "903f7hea";
	  $servidor = "localhost";
	  $basededatos = "bd_galeria";
	  
	  $consulta_foto = "SELECT * FROM `fotos`";

	    // Con estas funciones hace la conexion a la base de datos

	  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

	  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	  $resultado_foto = mysqli_query( $conexion, $consulta_foto ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	  $path= '..\fotosGaleria\_';

	 ?>


<body>

		<div class="top">
			<div class="cabecera">
	        	<img class="fotoLogo" src="..\imagenes\logoP.png">
	        	<div class="titulo">
	        		<h1>Galeria Imagenes</h1>
	        	</div>
        	</div>
      	</div>

      	<div class="barra">
    
      	</div>
     	<div class="borderbox" align="center">
      	<a class="insertar" href="formulario.php">
      	Insertar Foto
      	</a>
      	</div>

      	<?php 

      	$img = 'imgA';

      	// Muestra todas las fotos de la base de datos

      	while($row= mysqli_fetch_array($resultado_foto)){

      	
      			$nombre= $numero = $row['ruta'];
      			$foto= $path.$nombre;
      			?> 

      			<div class="contenido">
      		<div class="box">

      		<?php echo "<img class='$img' src='$foto'>"; ?>
      		</div>

      		<div class="texto">
      			<h2><?php echo $row['nombre'] ;  ?></h2>
      			<p><?php echo $row['fecha'] ;  ?></p>
      		</div>



      	</div>

			<?php
			      }

			        // ------------- Final de la estructura que se repite ----------------

			      // cerrar conexion con MYSQL

			      mysqli_close( $conexion );
			     
			    ?>

</body>
</html>