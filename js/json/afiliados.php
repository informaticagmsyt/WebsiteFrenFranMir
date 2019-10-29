<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-type: application/json; charset=utf-8'); 
include "../../conexion/conexion.php";
$sql='SELECT persona.id FROM `persona` ';
$query = mysqli_query($conexion,$sql);
$json['cantidad']=mysqli_num_rows($query);
$resul=json_encode($json);
echo $resul;
?>
