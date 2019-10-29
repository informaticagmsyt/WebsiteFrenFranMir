<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-type: application/json; charset=utf-8'); 
include '../../conexion/conexion.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$id=$_GET['id'];


$estado="SELECT * FROM `municipio` WHERE `estado_id` = '$id'";
$estados=mysqli_query($conexion,$estado);

while($estadosL = mysqli_fetch_array($estados)) {
$res []= array('id' => $estadosL["id"], 'name'=> $estadosL["nombre_municipio"]);
}
 //var_dump($res);
echo json_encode($res);

?>
