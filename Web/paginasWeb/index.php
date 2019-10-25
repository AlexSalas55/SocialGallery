<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="validacion.js"></script>
</head>
<body align="center">
	<h1 class="insertar">Login</h1>
	<p class="insertar" id="mensaje"></p>
	<form method="post" action="./login/services/login.proc.php" onsubmit="return login()">
		<input class="form_nom" type="text" name="user" id="user" placeholder="Inserta el usuario..."><br/>
		<br>


		<input class="form_nom" type="password" id="pass" name="password" placeholder="Inserta el password"><br/><br/>
		<input class="send" type="submit" name="Enviar">
	</form>

</body>
</html>