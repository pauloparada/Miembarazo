<?php
include "conexion.php";
$data=array();
//Sanitizo los campos
$usr = mysqli_real_escape_string($cnx,$_POST['usuario']);
$pwd = mysqli_real_escape_string($cnx,$_POST['password']);
// Hago la consulta
$sql = 'SELECT * FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';

while ($row=mysql_fetch_object($sql)){
 $data[]=$row;
}
echo json_encode($data);
?>

