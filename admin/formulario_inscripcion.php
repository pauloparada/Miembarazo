<?php
    
    require 'header.php';
    require 'gestorDeUsuarios.php';
   

?>


 <script>
    
   
   $(function() {
        $( "#datepicker" ).datepicker({
        'dateFormat':'yy-mm-dd'
        }
);
    


});
    
    
   
 
 </script>

<form action="procesar_altaUsuarios.php" method="POST" enctype="multipart/form-data">
			
				<label for="nombres">Nombres:</label><input type="text" name="nombres"/>
				<br/>
				<br/>
				<label for="apellidos">Apellidos:</label><input type="text" name="apellidos"/>
				<br/>
				<br/>
				Foto de Perfil<input type="file"name="profile_pic"/>
                                <br>
                                <br>
                <label for="email">Email:</label><input type="text" name="email"/>
				<br/>
				<br/>
				<label for="trimestreembarazo">Trimestre Emabarazo:</label><input type="text" name="trimestreembarazo"/>
				<br/>
				<br/>
				<label for="semanaembarazo">Semana Emabarazo:</label><input type="text" name="semanaembarazo"/>
				<br/>
				<br/>
				<label for="prepagada">Prepagada:</label><input type="text" name="prepagada"/>
				<br/>
				<br/>
				<label for="edad">Edad:</label><input type="text" name="edad"/>
				<br/>
				<br/>
				<label for="peso">Peso:</label><input type="text" name="peso"/>
				<br/>
				<br/>
				<label for="celular">Celular:</label><input type="text" name="celular"/>
				<br/>
				<br/>
				<label for="ciudad">Ciudad:</label><input type="text" name="ciudad"/>
				<br/>
				<br/>
				<label for="nombreusuario">Nombre de Usuario:</label><input type="text" name="nombreusuario"/>
				<br/>
				<br/>
				<label for="password">Password:</label><input type="password" name="password"/>
				<br/>
				<br/>

				<br/>

				<input type="submit" value="Enviar"/>
                               
			
			
			</form>
	
	