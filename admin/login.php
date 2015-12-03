<?php	 	
session_start();
if($_SESSION['logueado']){
	header('Location: admin.php');
}
else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Tutoken / Area para Clientes</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.3.custom.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.3/jquery-ui.min.js"></script>

</head>

<body>


<div id="header" style="width:auto; height: 190px; background-color:#42d411; display: block; position: relative;">

<center><div id="logo" style= "display: block; position: relative; top: 20px; bottom:40px; "></div>

</center>

</div>


<br />
<div id="content">
<center><h2 style="color:white;">Bienvenido al Area de Clientes de Tutoken</h2></center>

<div id="contact">
<center><h1>Por favor Ingrese su Usuario y Password</h1></center>
<br />
<br />
<form action="autenticarse.php" method="POST">
	<label for="usr">Usuario:</label><input type="text" name="usr"/><br/>
	<label for="pwd">Password:</label><input type="password" name="pwd"/><br/>
	<input type="submit" value="Iniciar Sesion"/>
	</form>
    
</div>
<br />



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
?>
