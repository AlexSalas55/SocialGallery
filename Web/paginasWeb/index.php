<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="./services/login.proc.php">
		<input type="text" name="user" placeholder="Inserta el usuario..." required><br/>
		<input type="password" name="password" placeholder="Inserta el password" required><br/><br/>
		<input type="submit" name="Enviar">
	</form>

</body>
</html>