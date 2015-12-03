<?php	 	
session_start();
require('conexionusuarios.php');
$conexion = conectarse();
if ($_SESSION["logueado"])
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Materia Biz / Area para Usuarios</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" href="http://www.materiabiz.com/mbiz/mb2009/css/materiabiz.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.3/jquery-ui.min.js"></script>
</head>

<body>


<div id="header" style="width:auto; height: 100px; background-color:#FFF; display: block; position: relative;">

<div id="logo" style= "display: block; position: relative; top: 20px; left: 140px;">
<img src="http://www.materiabiz.com/mbiz/mb2009/images/logo-blanco.jpg" alt="logo"  bottom= "40" />
</div>

</div>

<div id="nav">

<div id="content">
<center><h2 style="color:white;">Bienvenido al Area de Usuarios de MiEmbarazo</h2></center>

<h1>Listado de Archivos</h1>
<a href="logout.php"> Logout </a>
<table width="100%" border="1">
	<tr>
	<th>ID</th><th>Nombre</th><th>Apellidos</th><th>Foto de perfil</th><th>Email</th><th>Trimestre de Emabarazo</th><th>Semana Embarazo</th><th>Prepagada</th><th>Edad</th><th>Peso</th><th>Celular</th><th>Ciudad</th><th>Nombre de Usuario</th>
	</tr>
	<?php	 	
		$sql = 'SELECT * FROM usuarios';
		$resultados = mysqli_query($conexion,$sql);
		while($fila = mysqli_fetch_assoc($resultados)){
			?>
			<tr>
			<td><?php echo $fila['id_usuarios']; ?></td>
            <td><?php echo $fila['nombres']; ?></td>
            <td><?php echo $fila['apellidos']; ?></td>
            <td><?php echo $fila['profile_pic']; ?></td>
            <td><?php echo $fila['email']; ?></td>
            <td><?php echo $fila['trimestreembarazo']; ?></td>
            <td><?php echo $fila['semanaembarazo']; ?></td>
            <td><?php echo $fila['prepagada']; ?></td>
            <td><?php echo $fila['edad']; ?></td>
            <td><?php echo $fila['peso']; ?></td>
            <td><?php echo $fila['celular']; ?></td>
            <td><?php echo $fila['ciudad']; ?></td>
            <td><?php echo $fila['nombreusuario']; ?></td>
			</tr>
          
		<?php	 	
		}
		?>
</table>

</div>
<br />

<br />
<br />

</div>





</body>
</html>


<?php	 	
}
else
{
	?>
	<script type="text/javascript">
    alert("Acceso no autorizado");
    window.location.href = 'login.php';
    </script>
<?php	 	
}
?>

