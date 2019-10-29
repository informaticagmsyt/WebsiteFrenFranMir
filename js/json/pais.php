<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');
include '../../conexion/conexion.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$estado="SELECT * FROM paises";
$estados=mysqli_query($conexion,$estado);

while($estadosL = mysqli_fetch_array($estados)) {
$res []= array('id' => $estadosL["id_pais"], 'name'=> $estadosL["nombre_pais"]);
}
 //var_dump($res);
echo json_encode($res);

?>
