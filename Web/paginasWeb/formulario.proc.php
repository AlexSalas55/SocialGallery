<?php

	// Datos del Usuario para PHPMyadmin

    $usuario = "root";
    $contrasena = "903f7hea";
    $servidor = "localhost";
    $basededatos = "bd_galeria";

	// Recibe los datos del formulario y los pasa a una variable 

  $CAMPO1 = $_REQUEST['nombre'];

  // Comprueba que el archivo no pese demasiado

  if($_FILES["foto"]["size"]>2000000){
    
    echo "Solo se permiten archivos con un maximo de 2MB";
    echo "<a href='inicio.php'>Volver</a>";
    exit;
  }


  // Con estas funciones hace la conexion a la base de datos

  $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

  	// Realiza la consulta de tabla bici de forma descendente sobre id_bici

  $consulta_foto = "SELECT * FROM `fotos`";

  $resultado_foto = mysqli_query( $conexion, $consulta_foto ) or die ( "Algo ha ido mal en la consulta a la base de datos");

  	// En la variable row recogo la ultima fila de la consulta por ordenarla de forma descendente (id_bici)

  $row= mysqli_fetch_array($resultado_foto);

  // Detecta si el nombre de la foto es repetido

  while($row= mysqli_fetch_array($resultado_foto)){

    if ($_REQUEST['nombre'] == $row['nombre']) {
      echo "El nombre de la imagen ya ha sido utilizado";
      echo "<a href='inicio.php'>Volver</a>";
    exit;
    }

  }


	// Recoge el ultimo numero de id_bici que es el que indica el ultimo anuncio creado

  $numeracion=$row['id_foto'];

  	// crea la ruta para guardar la imagen temporal que ha subido el usuario

  $ruta = "../fotosGaleria/_".basename($_FILES['foto']['name']);

  $CAMPO2= basename($_FILES['foto']['name']);


  if($_FILES["foto"]["size"]>2000000){

    echo "Solo se permiten archivos menores de 2MB";
    echo "<a href='Proyecto1galeria.php'>Volver</a>";
    exit;
  }

  $CAMPO3 = date('Y-m-d');

	// Se insertan los datos con las variables en la base de datos

  $insertar = "INSERT INTO fotos (nombre, ruta, fecha)
          VALUES ('$CAMPO1', '$CAMPO2', '$CAMPO3')";


    // Se ejecutan todos los inserts en la Base de Datos

		  mysqli_query($conexion, $insertar);

	// Se modfica la ruta de el archivo temporal que ha dejado el usuario

	move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

	// Con esta funcion rediriges al usuario a la pagina de anuncios

	header('location: inicio.php');

?>