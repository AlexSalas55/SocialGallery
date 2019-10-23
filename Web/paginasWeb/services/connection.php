<?php
$conn = mysqli_connect('localhost','root','','imagenes');
if($conn){
	echo "Conexión establecida<br>";
}else{
	echo "Ha fallado la conexión<br>";
}
?>