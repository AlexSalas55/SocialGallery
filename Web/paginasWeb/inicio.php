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
	  $basededatos = "gallery";

	  session_start();

	  $nombre_usu= $_SESSION['nombre'];


	    // Con estas funciones hace la conexion a la base de datos

	  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

	  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

		//Detecta el usuario y busca su id con una simple consulta

	  	
	  	if(isset($_SESSION['nombre'])){
			
		$consulta_id= "SELECT id_usuario FROM `tbl_usuarios` Where nombre='$nombre_usu'";
		
		$id_variable_cons = mysqli_query( $conexion, $consulta_id ) or die ( "Algo ha ido mal en la consulta a la base de datos");

		while($row1= mysqli_fetch_array($id_variable_cons)){

		$id_variable= $row1['id_usuario'];

		}

		$consulta_foto = "SELECT * FROM `tbl_gallery` WHERE id_usuario=$id_variable";

	  $resultado_foto = mysqli_query( $conexion, $consulta_foto ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	  $path= '..\fotosGaleria\_';

	}

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
    
    <?php

    //Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		
		if(isset($_SESSION['nombre'])){
			echo "<a style=float:right; class=insertar href='./login/services/logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>";
			
		



    ?>

    	<h2 class=insertar style="color:white; ">Sitio personal de <?php echo $_SESSION['nombre']; ?></h2>
      	
     	<div class="borderbox" align="center">
      	<a class="insertar" <?php echo 'href="formulario.php?id_insert='.$id_variable.'"'?>>
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

			  }else{

			  	echo "<div align=center> <a class=insertar href='./index.php'>Iniciar Sesion ".$_SESSION['nombre']."</a> </div>;";

			  }
			        // ------------- Final de la estructura que se repite ----------------

			      // cerrar conexion con MYSQL

			      mysqli_close( $conexion );
			     
			    ?>

</body>
</html>