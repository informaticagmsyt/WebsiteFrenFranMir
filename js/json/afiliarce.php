<?php


include "../../conexion/conexion.php";
$registro=$_POST["registro"];
$fecha= date("Y-m-d ");
$json=json_decode($registro);
$email=$_GET["email"];
$sql='INSERT INTO `persona` (`id`, `email`, `cedula`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `sexo`, `rif`, `direccion_personal`, `telefonos`, `foto`, `activa`, `afiliada`, `bloqueada`, `si_empresa`, `si_comunidad`, `parroquia_id`, `ciudad`, `correos_electronicos`, `tipo_usuario` ,`comunidad`,`empresa`,`fecha_afiliacion`) VALUES (NULL, "'.$email.'", "'.$json->cedula.'", "'.$json->pnombre.'", "'.$json->snombre.'", "'.$json->papellido.'", "'.$json->sapellido.'",
 "'.$json->fecha.'", "'.$json->sexo.'", "'.$json->rif.'","'.$json->direccion.'", "'.$json->telefono.'", "null", "0", "1", "0", "'.$json->comunidad.'", "'.$json->empresa.'", "'.$json->parroquiasS->id.'","'.$json->ciudad.'", "null", "1","'.$json->DesComunidad.'","'.$json->DesEmpresa.'","'.$fecha.'")';
$query = mysqli_query($conexion,$sql);



$busEmail="SELECT * FROM  `correos_electronicos`  WHERE  `email` =  '$email'";

$queryEmail=mysqli_query($conexion,$busEmail);

 if (mysqli_num_rows($queryEmail)>0){
	 while ($registro = mysqli_fetch_array($queryEmail)){
	 	 $uptateEmail='UPDATE  `correos_electronicos` SET  `registrado` =  "1" WHERE  `id` = "'.$registro['id'].'"';
	 	$queryUptate=mysqli_query($conexion,$uptateEmail);	
	 	}
	}
?>
