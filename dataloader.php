<?php	 	
session_start();
require('conexion.php');
$cnx = conectarse();
//Sanitizo los campos
$usr = mysqli_real_escape_string($cnx,$_POST['usuario']);
$pwd = mysqli_real_escape_string($cnx,$_POST['password']);
// Hago la consulta
$sql = 'SELECT * FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
// EJECUTO LA CONSULTA
$consulta = mysqli_query($cnx,$sql);
$myArray = array();
while($row = $sql->fetch_array(MYSQL_ASSOC)){
	$myArray[] = $row;
	}
	echo json_encode(($myArray);
	?>
