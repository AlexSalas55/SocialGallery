<?php
$conn = mysqli_connect('localhost','root','903f7hea','gallery');
if($conn){
	echo "Conexión establecida<br>";
}else{
	echo "Ha fallado la conexión<br>";
}
?>