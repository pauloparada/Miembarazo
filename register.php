<?php	 	
session_start();
/**
 * Valida cadena de un correo
 * @param string $email
 * @return boolean
 */
function validar_correo($email) {
	$result = true;
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
		$result = false;
	}
	return $result;
}


require('http://www.comprandoofertas.com/miembarazo/conexion.php');
if($_POST["nombre"] != "" && $_POST["apellidos"] != "" && $_POST["foto"] != "" && $_POST["email"] != "" && $_POST["periodo"] != "" && $_POST["prepagada"] != "" && $_POST["edad"] != "" && $_POST["peso"] != "" && $_POST["celular"] != "" && $_POST["ciudad"] != "" && $_POST["usuario"] != "" && $_POST["password"] != "" && $_POST["password2"] != "")
{
	$conexion = conectarse();
	$sqlVal = 'SELECT usuario FROM usuario WHERE usuario="'.$_POST["usuario"].'"' ;
	$resultadoVal = mysqli_query($conexion,$sqlVal);
	$num = mysqli_num_rows($resultadoVal);
	if($num == 0)
	{
		if(validar_correo($_POST["email"]))
		{
			$conexion = conectarse();
			$sqlVal1 = 'SELECT email FROM usuario WHERE email="'.$_POST["email"].'"' ;
			$resultadoVal1 = mysqli_query($conexion,$sqlVal1);
			$num1 = mysqli_num_rows($resultadoVal1);
			if($num1 == 0)
			{
				if($_POST["password"] == $_POST["password2"])
				{
					$sql = "INSERT INTO usuario (nombre, apellidos, foto, email, periodo, prepagada, edad, peso, celular, ciudad, usuario, password, fecha) VALUES('".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["foto"]."', '".$_POST["email"]."', '".$_POST["periodo"]."', '".$_POST["prepagada"]."', '".$_POST["edad"]."', '".$_POST["peso"]."', '".$_POST["celular"]."', '".$_POST["ciudad"]."', '".$_POST["usuario"]."', '".$_POST["password"]."', '".date("Y-m-d H:i:s")."')";
					if(mysqli_query($conexion,$sql)){
						$sql = 'SELECT * FROM usuario WHERE usuario="'.$_POST["usuario"].'"';
						$resultado = mysqli_query($conexion,$sql);
						$datos = mysqli_fetch_assoc($resultado);
						$_SESSION["usuario"] = new StdClass;
						$_SESSION["usuario"]->id = $datos["id"];
						$_SESSION["usuario"]->nombre = $datos["nombre"];
						
						
						?>
                       
                        <?php	 	
						$to = $_POST["email"];
						$subject = "Registro en Mi Embarazo";
						$message =  '
 Bienvenido '.$datos["nombre"] .'<br /><br />
  Gracias por registrarse! Ahora podra acceder a nuestro material y a todos los beneficios de ser usuario de Mi Embarazo<br /><br /><br />
  Su nombre de usuario es: '.$datos["username"].'<br /><br />
  Su contraseña es: '.$datos["psw"].'<br /><br /><br />
  Cordialmente<br /><br />
  Equipo de Mi Embarazo
  ';
						
						
					
						$from = "info@miembarazo.com";
						$headers = "From:" . $from . "\r\nContent-Type: text/html;\r\n";
						mail($to,$subject,$message,$headers);
						
                      
						
                       ?>

				<script type="text/javascript">
                alert('Gracias por registrarse! Recibira Pronto un Correo confirmando su usuario y contrasena');
                </script>
                        
                        
						<script type="text/javascript">
							alert("Bienvenido <?php	 	 echo $datos["nombre"] ?>");
							window.location.href = 'login.php';
						</script>
						<?php	 	
					}
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("Los password deben coincidir");
						window.history.go(-1);
					</script>
					<?php	 	
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("El email ya existe, deberias usar otro");
					window.history.go(-1);
				</script>
				<?php	 	
			}
		}
		else
		{
			?>
			<script type="text/javascript">
                alert("El email debe ser valido");
                window.history.go(-1);;
            </script>
            <?php	 	
		}
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("El nombre de usuario ya existe, elige otro");
			window.history.go(-1);
		</script>
		<?php	 	
	}
}
else
{
	?>
	<script type="text/javascript">
		alert("Debes llenar todos los campos");
		window.history.go(-1);
	</script>
	<?php	 	
}
?>