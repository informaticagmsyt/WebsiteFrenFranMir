<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-type: application/json; charset=utf-8'); 
include '../../conexion/conexion.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$id=$_GET['id'];

$estado="SELECT * FROM municipios WHERE id_estado = '$id'";



$estados = pg_query($conexion,$estado);

while($estadosL = pg_fetch_array($estados)) {
$res []= array('id' => $estadosL["id_municipio"], 'name'=> $estadosL["municipio"]);
}
 //var_dump($res);
echo json_encode($res);

?>
