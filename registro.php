<?php   
  $cn = mysql_connect("localhost","miembarazofinal","miembarazofinal");
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


<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">


<!--Page Scripts Load -->
<script src="js/jquery-1.11.3.js"		type="text/javascript"></script>	

</head>

<body>


<div class="content">

    <div class="navigation-icons" style="overflow: visible !important;height:520px;margin-top:300px;">   
            <center><h2>Ingrese su usuario y contraseña </h2> </center>
            <form>
                <input type="text" id="nombres" name="nombres" placeholder="Ingrese su Nombre" /><br/> 
                <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese su Apellido" /><br/> 
                <input type="text" id="profile_pic" name="profile_pic" placeholder="Ingrese su Foto de perfil" /><br/> 
                <input type="text" id="email" name="email" placeholder="Ingrese su Email" /><br/> 
                <input type="text" id="trimestreembarazo" name="trimestreembarazo" placeholder="Ingrese Trimestre" /><br/> 
                <input type="text" id="semanaembarazo" name="semanaembarazo" placeholder="Ingrese su Semana de embarazo" /><br/>
                <input type="text" id="prepagada" name="prepagada" placeholder="Prepagada" /><br/>
                <input type="text" id="edad" name="edad" placeholder="Edad" /><br/>
                <input type="text" id="peso" name="peso" placeholder="Peso" /><br/>
                <input type="text" id="celular" name="celular" placeholder="Celular" /><br/>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" /><br/>
                <input type="text" id="nombreusuario" name="nombreusuario" placeholder="Ingrese su Nombre de Usuario" /><br/> 
                <input type="password" id="password" name="password" placeholder="Ingrese su Password"/> 
                <input type="button" value="Save" id="save" >
            </form>
    </div>
    	
<div id="result"></div>
</div>

<script type="text/javascript">
$(function(){
        //create ajax insert record
          $('#save').click(function(){
              var nombresusuario = $('#nombres').val();
              var apellidosusuario = $('#apellidos').val();
              var profile_picusuario = $('#profile_pic').val();
              var trimestreembarazousuario = $('#trimestreembarazo').val();
              var semanaembarazousuario = $('#semanaembarazo').val();
              var prepagadasusuario = $('#prepagada').val();
              var edadusuario = $('#edad').val();
              var pesousuario = $('#peso').val();
              var celularsusuario = $('#celular').val();
              var ciudadusuario = $('#ciudad').val();
              var nombreusuariousuario = $('#nombreusuario').val();
              var passwordusuario = $('#password').val();
              
              $.ajax({
                        url      : "registro.php",
                        type     : "POST",
                        async    : false,
                        data     : {
                                      buttonsave : 1,
                                      nombres: nombreusuario,
                                      apellidos: apellidosusuario,
                                      profile_pic: profile_picusuario,
                                      trimestreembarazo: trimestreembarazousuario,
                                      semanaembarazo: semanaembarazousuario;
                                      prepagada: prepagadasusuario;
                                      edad: edadusuario,
                                      peso: pesousuario,
                                      celular: celularsusuario,
                                      ciudad: ciudadusuario,
                                      nombreusuario: nombreusuariousuario,
                                      password: passwordusuario
                                    },

                        success  : function(result)
                        {
                          alert("success");
                        }
                      });

          });



            })

</script>

</body>
</html>






























