<?php	 	
	$cn = mysql_connect("comprandoofertascom.fatcowmysql.com ","miembarazofinal","miembarazofinal");
	if ($cn) 
	{
		mysql_select_db("miembarazofinal",$cn);
	}
	if (isset($_POST['buttonsave'])) 
	{
		$sql = "INSERT INTO usuarios (nombres,apellidos,profile_pic,email,trimestreembarazo,semanaembarazo,prepagada,edad,peso,celular,ciudad,nombreusuario,password)
				VALUES ('{$_POST[nombres]}','{$_POST[apellidos]}','{$_POST[profile_pic]}','{$_POST[email]}','{$_POST[trimestreembarazo]}','{$_POST[semanaembarazo]}','{$_POST[prepagada]}','{$_POST[edad]}','{$_POST[peso]}','{$_POST[celular]}','{$_POST[ciudad]}','{$_POST[nombreusuario]}','{$_POST[password]}')"
		if ($sql) 
		{
			echo "se ha insertado correctamente";
		}
	}

	?>
