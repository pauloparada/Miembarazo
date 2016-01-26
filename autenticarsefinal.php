
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$usr = mysqli_real_escape_string($cnx,$_POST['usuario']);
$pwd = mysqli_real_escape_string($cnx,$_POST['password']);

$conn = new mysqli("comprandoofertascom.fatcowmysql.com", "miembarazofinal", "miembarazofinal", "miembarazofinal");

$result = $conn->query('SELECT * FROM usuarios WHERE usuario = "'.$usr.'" AND password = "'.$pwd.'"');

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"nombre":"'  . $rs["nombre"] . '",';
    $outp .= '"apellidos":"'   . $rs["apellidos"]        . '",';
    $outp .= '"email":"'. $rs["email"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
?>
	<script type="text/javascript">
		alert(outp);
		window.history.go(-2);
	</script>
	
	<?php	
?>