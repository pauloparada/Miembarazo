<?php	 	
function conectarse() {
$host = 'comprandoofertascom.fatcowmysql.com'; // Dirección del servidor de base de datos
$usr = 'nuevami'; // Usuario para conectarse al servidor de bases de datos
$passwd = 'nuevami'; // Contraseña del servidor de base de datos
$db = 'nuevami'; // Base de datos a utilizar

$link = mysqli_connect($host,$usr,$passwd) or die('No me pude conectar a la base de datos');
mysqli_select_db($link,$db) or die('No pude seleccionar la base de datos');
return $link;

}

?>

