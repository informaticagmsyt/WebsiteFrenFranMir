<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

include '../conexion/conexion.php';

$cedula        =  $_POST['cedula'];
$nombre	       =  $_POST['nombre'];
$apellido      =  $_POST['apellido'];
$telefono      =  $_POST['telefono'];
$celular       =  $_POST['celular'];
$email         =  $_POST['email'];
$parroquia     =  $_POST['parroquia']; 
$eje           =  $_POST['eje']; 
$sector        =  $_POST['sector']; 
$moviemiento   =  $_POST['moviemiento']; 
$espacio       =  $_POST['espacio']; 
$tipo_proyecto =  $_POST['tipo_proyecto'];
$electricidad  =  $_POST['electricidad'];
$internet      =  $_POST['internet'];
$agua 		   =  $_POST['agua'];

$sql1="SELECT * from unidad_patria WHERE cedula='$cedula'";
$esta=pg_query($conexion,$sql1);
	$fila=pg_fetch_array($esta);

	if ($fila['cedula']==0) {
$sql="INSERT into mas_caracas (cedula,nombres,apellidos,telefono,celular,email,parroquia,eje,sector,movimiento,espacio,luz,internet,agua,tipo_proyecto) VALUES ('$cedula','$nombre','$apellido','$telefono','$celular','$email','$parroquia','$eje','$sector','$moviemiento','$espacio','$electricidad','$internet','$agua','$tipo_proyecto')";
$estados=pg_query($conexion,$sql);
	if ($estados) {
		/*$mail = new PHPMailer(true);
				try {
									//Server settings
									$mail->SMTPDebug = 0;                                       // Enable verbose debug output
									$mail->isSMTP();                                            // Set mailer to use SMTP
									$mail->Host       = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
									$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
									$mail->Username   = 'agroproductivo.gmsyt@gmail.com';       // SMTP username
									$mail->Password   = 'ja.010203';                            // SMTP password
									$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
									$mail->Port       = 587;                                    // TCP port to connect to
									//Recipients
									$mail->setFrom('agroproductivo.gmsyt@gmail.com', 'Fundacion Gran Mision Saber y Trabajo');
									$mail->addAddress($email, $nombre);     // Add a recipient
									// Content
									$mail->isHTML(true);                                  // Set email format to HTML
									$mail->Subject = 'Registro en la Primera Asamblea de Emprendedores Completado';
									$mail->Body    = 'Felicidades su registro en la 1° Asamblea de emprendedores fue Exitoso Te esperamos" Por la  Soberania Alimentaria Juntos Podemos"';
									$mail->send();
									echo 'Mesnsaje Enviado';
								} catch (Exception $e) {
									echo " Error: {$mail->ErrorInfo}";
								}*/
		echo '  <script type="text/javascript">
     		 alert("Registro Completado");
        	 document.location.href ="../index.html";
        </script>';
	}



}else{
		echo '  <script type="text/javascript">
			     		 alert("Usted ya se Encuentra Registrado en el Plan Mas Caracas");
			        	 document.location.href ="../index.html";
			        </script>';
	}



?> 	