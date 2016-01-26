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
$cantidad_resultados = mysqli_num_rows($consulta);
if($cantidad_resultados == 1){
	//LO MANDO A privado.php
	$_SESSION['logueado'] = true;
	$datosUsuario = mysqli_fetch_assoc($consulta);
	$_SESSION['usuario'] = $datosUsuario;


	?>
	<script type="text/javascript">
		window.history.go(-2);
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
