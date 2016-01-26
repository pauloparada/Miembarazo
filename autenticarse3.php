
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("comprandoofertascom.fatcowmysql.com", "miembarazofinal", "miembarazofinal", "miembarazofinal");

$result = $conn->query('SELECT nombre, apellidos, email FROM usuarios');

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