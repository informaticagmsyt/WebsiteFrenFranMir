<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-type: application/json; charset=utf-8'); 
include '../../conexion/conexion.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$id=$_GET['id'];

$estado="SELECT * FROM tbldiex WHERE intcedula = '$id'";
$estados=pg_query($conexion,$estado);

while($estadosL = pg_fetch_assoc($estados)) {
$res []= array('id' => $estadosL["intcedula"], 'name'=> $estadosL["strnombre_primer"], 'name2'=> $estadosL["strnombre_segundo"] , 'lastname' => $estadosL["strapellido_primer"] , 'lastname2' => $estadosL["strapellido_segundo"], 'date' =>  $estadosL["dtmnacimiento"] );
}

echo json_encode($res);

?>
