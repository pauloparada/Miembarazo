<?php	 	
session_start();
require('conexionadministrador.php');
$conexion = conectarse();


$caption = $_POST['nombre'];
if($caption != ""){
	if(!isset($_POST["id"]))
	{
		if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
			//Comienzo la copia
			//Chequeo que la extensión corresponda a las autorizadas
			$extensionesAutorizadas = array('jpg');
			//Agarro el nombre del archivo y lo separo por los puntos
			$archivoEnMinusculas = strtolower($_FILES['archivo']['name']);
			$nombreSeparado = explode(".",$archivoEnMinusculas);	
			if(in_array(end($nombreSeparado),$extensionesAutorizadas)){
				$hoy = date("YmdHis");
				// Si la ultima posicion de $nombreSeparado está dentro de $extensionesAutorizadas entonces copio el archivo
				if(move_uploaded_file($_FILES['archivo']['tmp_name'],'archivos/'.$hoy.$_FILES['archivo']['name'])){
					//Se subió con exito el archivo, guardo el nombre del archivo en una variable para luego insertarla en la base
					$nombre_archivo = $hoy.$_FILES['archivo']['name'];
					//Inserto la foto en la base de datos
					$sql = "INSERT INTO archivo (archivo, nombre, fecha) VALUES('".$nombre_archivo."', '".$caption."', '".date("Y-m-d H:i:s")."')";
					if(mysqli_query($conexion,$sql)){
						?>
						
						<script type="text/javascript">
							alert("Se ha insertado el archivo correctamente");
							window.location.href = 'subirArchivo.php';
						</script>
						<?php	 	
						
					}
				}
				else {
					echo "Error al subir el archivo";
				}
			}
		}
		else {
				echo "error al subir el archivo";
		}
	}
	else
	{
		$sql = 'UPDATE archivo SET nombre = "'.$caption.'" WHERE id='.$_POST["id"]; 
		if(mysqli_query($conexion,$sql)){
			?>
			
			<script type="text/javascript">
				alert("Se ha actualizado el nombre del archivo correctamente");
				window.location.href = 'subirArchivo.php';
			</script>
			<?php	 	
			
		}
	}
}
else {
	echo "Debe completar todos los campos";
}
?>