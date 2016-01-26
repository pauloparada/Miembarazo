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
$result = mysqli_fetch_array($consulta);
$cantidad_resultados = mysqli_num_rows($consulta);
$data[]=$result;
if($cantidad_resultados == 1){
	//LO MANDO A privado.php
	//$_SESSION['logueado'] = true;
	//$datosUsuario = mysqli_fetch_assoc($consulta);
	//$_SESSION['usuario'] = $datosUsuario;
	//$_SESSION['user_test'] = 'userTest';
	
	/*header("location:index.html?id=".$result[0]."&nombre=".$result[1]."&apellidos=".$result[2]);*/

	?>
	<script type="text/javascript">	
		

		var t = JSON.parse('{"name": "nombre", "skills": "apellidos", "jobtitel": "Entwickler", "res_linkedin": "GwebSearch"}');
alert(t['name'])
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
