<?php	 	
session_start();
require('conexionadministrador.php');
$cnx = conectarse();
//Sanitizo los campos
$usr = mysqli_real_escape_string($cnx,$_POST['usr']);
$pwd = mysqli_real_escape_string($cnx,$_POST['pwd']);
// Hago la consulta
$sql = 'SELECT * FROM administrador WHERE nombre = "'.$usr.'" AND codverificacion = "'.$pwd.'"';
// EJECUTO LA CONSULTA
$consulta = mysqli_query($cnx,$sql);
$cantidad_resultados = mysqli_num_rows($consulta);
if($cantidad_resultados == 1){
	//LO MANDO A privado.php
	$_SESSION['logueado'] = true;
	$datosUsuario = mysqli_fetch_assoc($consulta);
	$_SESSION['administrador'] = $datosUsuario;
	header('Location: menu.php');
} else {
	// LO MANDO A LOGUEARSE INFORMANDOLE DEL ERROR
	?>
	<script type="text/javascript">
		alert('Hubo un error en el logueo');
		window.location.href = 'login.php';
	</script>
	
	<?php	 	
}