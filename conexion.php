<?php	 	
function conectarse() {
$host = 'comprandoofertascom.fatcowmysql.com '; // Direcci�n del servidor de base de datos
$usr = 'miembarazofinal'; // Usuario para conectarse al servidor de bases de datos
$passwd = 'miembarazofinal'; // Contrase�a del servidor de base de datos
$db = 'miembarazofinal'; // Base de datos a utilizar

$link = mysqli_connect($host,$usr,$passwd) or die('No me pude conectar a la base de datos');
mysqli_select_db($link,$db) or die('No pude seleccionar la base de datos');
return $link;

}

?>