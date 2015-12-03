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
<title> MiEmbarazo/ Area de administracion</title>
<link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>


<div id="header">

<center><div id="logo" style= "display: block; position: relative; top: 20px;">
</div></center>

</div>




<div id="content">
<center><h2 style="color:black;">Bienvenido al Area de administracion de MiEmbarazo</h2></center>

<h1>Seleccione la accion que desea realizar:</h1>

<a href="menuadmin.php">Administrar Imagenes del Menu</a>
</br></br>
<a href="listado_usuarios.php">Listado de usuarios</a>
</br></br>
<a href="articulos.php">Seccion Articulos</a>
</br></br>
<a href="videos.php">Seccion Videos</a>
</br></br>
<a href="cursos.php">Seccion Cursos</a>
</br></br>
</br></br>


<a href="logout.php"> Salir / Logout </a>

<div id="ciudades">
	<center><h3>Ver la base de datos de los productos</h3></center>
	
	<center><h3>Verificar código de un producto</h3></center>
	<center><a href="menuproductos.html"><div class="menuproductos"></div></a></center>
	
</div>


</div>
<br />

<br />
<br />

</div>

<div id="footer">

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

