<?php

	$host = "localhost";
	$port = "5432";
	$user = "postgres";
	$pass = "aed09f75aa";
	$dbname = "micromisionproductiva";

	$conexion = pg_connect("host=$host port=$port user=$user password=$pass dbname=$dbname");
	
		if (!$conexion) {
			echo "Error de Conexion";
		}
?>

