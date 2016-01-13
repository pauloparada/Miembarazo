<?php	 	
session_start();
require('conexion.php');
$cnx = conectarse();
//Sanitizo los campos
$usr = mysqli_real_escape_string($cnx,$_POST['usuario']);
$pwd = mysqli_real_escape_string($cnx,$_POST['password']);
// Hago la consulta
$sql = 'SELECT * FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
$uno = 'SELECT nombre FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
$dos = 'SELECT apellidos FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
$tres = 'SELECT foto FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
$cuatro = 'SELECT edad FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"';
// EJECUTO LA CONSULTA
$consulta = mysqli_query($cnx,$sql);
$cantidad_resultados = mysqli_num_rows($consulta);
if($cantidad_resultados == 1){
	//LO MANDO A privado.php
	$_SESSION['logueado'] = true;
	$datosUsuario = mysqli_fetch_assoc($consulta);
	$_SESSION['usuario'] = $datosUsuario;

	$_SESSION['nombre'] = $uno;
	$_SESSION['apellidos'] = $dos;
	$_SESSION['foto'] = $tres;
	$_SESSION['edad'] = $cuatro;


	?>
	<script type="text/javascript">
		header('Location: index.html');
	</script>
	
	<?php	
} else {
	// LO MANDO A LOGUEARSE INFORMANDOLE DEL ERROR
	?>
	<script type="text/javascript">
		alert('Hubo un error en el logueo');
		window.history.go(-1);
	</script>
	
	<?php	 	
}
