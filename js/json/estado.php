<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-type: application/json; charset=utf-8'); 
include '../../conexion/conexion.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$estado="SELECT * FROM estados";
$estados = pg_query($conexion,$estado);

while($estadosL = pg_fetch_array($estados)) {
$res []= array('id' => $estadosL["id_estado"], 'name'=> $estadosL["estado"]);
}
 //var_dump($res);
echo json_encode($res);

?>
