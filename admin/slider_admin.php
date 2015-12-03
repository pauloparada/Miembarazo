<?php	 	
session_start();
require('conexionadministrador.php');
$conexion = conectarse();
if ($_SESSION["logueado"])
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Materia Biz / Area para Administradores</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" href="http://www.materiabiz.com/mbiz/mb2009/css/materiabiz.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.3/jquery-ui.min.js"></script>
<script type="text/javascript">
jQuery(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
        'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
        dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['es']);
});    

$(document).ready(function() {
   $("#datepicker").datepicker();
 });
</script>


</head>

<body>


<div id="header" style="width:auto; height: 100px; background-color:#FFF; display: block; position: relative;">

<div id="logo" style= "display: block; position: relative; top: 20px; left: 140px;">
<img src="http://www.materiabiz.com/mbiz/mb2009/images/logo-blanco.jpg" alt="logo"  bottom= "40" />
</div>

</div>

<div id="nav">
<div id="mbzMainMenu" style="height:47px; margin-bottom: 15px"; ><div class=L1x style="display: block; position: relative; left: 150px;"><a href="http://www.materiabiz.com/mbz/index.vsp">Home</a><a href="http://www.masterennegocios.materiabiz.com" style="color:#df0000;font-weight:bold;">Master en Negocios</a><a href="http://www.escueladenegocios.materiabiz.com" style="color:#df0000;font-weight:bold;">Escuela de Negocios MATERIABIZ</a><a href="http://mentores.materiabiz.com" style="color:#df0000;font-weight:bold;">Premio Mentores</a><a href="/foros">FOROS</a><a href="http://www.materiabiz.com/foros/register.php">Suscr&iacute;base</a></div><div class="L2" style="display: block; position: relative; left: 130px"><a href="http://www.materiabiz.com/mbz/economiayfinanzas/index.vsp">Econom&iacute;a &amp; Finanzas</a><a href="http://www.materiabiz.com/mbz/estrategiaymarketing/index.vsp">Estrategia &amp; Marketing</a><a href="http://www.materiabiz.com/mbz/ityoperaciones/index.vsp">IT &amp; Operaciones</a><a href="http://www.materiabiz.com/mbz/capitalhumano/index.vsp">Capital Humano</a><a href="http://www.materiabiz.com/mbz/empresaysociedad/index.vsp">Empresa &amp; Sociedad</a><a href="http://www.materiabiz.com/mbz/entrepreneurship/index.vsp">Emprendedores</a><a href="http://www.materiabiz.com/mbz/mundo2020/index.vsp">Mundo 2020</a><a href="http://www.materiabiz.com/mbz/materiabiztv/index.vsp">MATERIABIZ TV</a><a href="http://www.materiabiz.com/mbz/gurues/index.vsp">Gur&uacute;es</a><a href="http://www.materiabiz.com/mbz/biografias/index.vsp">Biograf&iacute;as</a></div></div>
<!-- si e-planning v3 - Comienzo espacio Materiabiz _ Interior _ IBM Interior -->
<script>eplAD4("6e4231116612a9c0",{t:1,timeout:0,ma:1,custF:null});</script>
<!-- e-planning v3 - Fin espacio Materiabiz _ Interior _ IBM Interior -->


  </td></tr>
  <tr><td>
   
<!-- e-planning v3 - Comienzo espacio Materiabiz _ Tapa _ Espacio 333 -->
<script type="text/javascript" language="JavaScript1.1">
<!--
var rnd = (new String(Math.random())).substring(2,8) + (((new Date()).getTime()) & 262143);
var cs = document.charset || document.characterSet;
document.write('<scri' + 'pt language="JavaScript1.1" type="text/javascript" src="http://ads.e-planning.net/eb/3/4e4f/0ab63b06b230452c?o=j&rnd=' + rnd + '&crs=' + cs + '"></scr' + 'ipt>');
//-->
</script>
<noscript><a href="http://ads.e-planning.net/ei/3/4e4f/0ab63b06b230452c?it=i&rnd=$RANDOM" target="_blank"><img alt="e-planning.net ad" src="http://ads.e-planning.net/eb/3/4e4f/0ab63b06b230452c?o=i&rnd=$RANDOM" border=0></a></noscript>
<!-- e-planning v3 - Fin espacio Materiabiz _ Tapa _ Espacio 333 --><div style="width:100%; text-align:center; background-color:#000000;">
<!-- e-planning v3 - Comienzo espacio Materiabiz _ Tapa _ IBM2 Home -->
<script type="text/javascript" language="JavaScript1.1">
<!--
var rnd = (new String(Math.random())).substring(2,8) + (((new Date()).getTime()) & 262143);
var cs = document.charset || document.characterSet;
document.write('<scri' + 'pt language="JavaScript1.1" type="text/javascript" src="http://ads.e-planning.net/eb/3/4e4f/51dc404ef35e10f7?o=j&rnd=' + rnd + '&crs=' + cs + '"></scr' + 'ipt>');
//-->
</script>
<noscript><a 
href="http://ads.e-planning.net/ei/3/4e4f/51dc404ef35e10f7?it=i&rnd=$RANDOM" target="_blank"><img alt="e-planning.net ad" src="http://ads.e-planning.net/eb/3/4e4f/51dc404ef35e10f7?o=i&rnd=$RANDOM" border=0></a></noscript>


</div>



<div id="content">
<center><h2 style="color:white;">Desde esta seccion podra modificar las imagenes del slider del Home</h2></center>

<div id="contact">
	<h1>Subir archivos</h1>
	<form action="procesar.php" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre del archivo:</label><input type="text" name="nombre" id="nombre"/><br/>
		<input type="file" name="archivo" id="archivo"/><br/>
		<input type="submit" value="Subir archivo"/>
		</form>
    
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