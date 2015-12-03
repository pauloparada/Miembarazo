<?php	 	
function conectarse() {
$host = 'localhost'; // DirecciÛn del servidor de base de datos
$usr = 'miembarazo3'; // Usuario para conectarse al servidor de bases de datos
$passwd = 'miembarazo3'; // ContraseÒa del servidor de base de datos
$db = 'miembarazoadmin'; // Base de datos a utilizar

$link = mysqli_connect($host,$usr,$passwd) or die('No me pude conectar a la base de datos');
mysqli_select_db($link,$db) or die('No pude seleccionar la base de datos');
return $link;

}

?>