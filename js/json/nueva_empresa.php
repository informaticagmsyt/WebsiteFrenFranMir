<?php
include '../../conexion/conexion.php';
/*Empresa*/
  /*datos de la Empresa*/
    $razon=$_GET['razon'];
    $rif=$_GET['rif'];
    $capital=$_GET['capital'];
    $parroquia=$_GET['parroquia'];
    $fecha=$_GET['fecha'];
    $ciudad=$_GET['ciudad'];
    $empleados=$_GET['empleados'];
    $direccion=$_GET['dirrecion'];
    $telefono=$_GET['telefono'];
  /*datos Fin*/
  /*datos de conctatos*/
    $web=$_GET['web'];
    $emailGenerico=$_GET['emailGenerico'];
    $filiales=$_GET['filiales'];
    $sucursale=$_GET['sucursale'];
    $sucursaleE=$_GET['sucursaleE'];
  /*conctatos Fin*/
  /*block Representante*/
    $nombreR=$_GET['nombreR'];
    $apellidoR=$_GET['apellidoR'];
    $cedulaR=$_GET['cedulaR'];
    $telefonoR=$_GET['telefonoR'];
    $cargoR=$_GET['cargoR'];
    $emailR=$_GET['emailR'];
    $dirrecionR=$_GET['dirrecionR'];
  /*Fin Representante*/
  /*otro Contacto*/
    $nombreA=$_GET['nombreA'];
    $apellidoA=$_GET['apellidoA'];
    $cedulaA=$_GET['cedulaA'];
    $telefonoA=$_GET['telefonoA'];
    $cargoA=$_GET['cargoA'];
    $emailA=$_GET['emailA'];
  /*fin*/
  /*actividades e intereces*/
    $actividades = $_GET['actividades'];
    $actividadesSecundaria = $_GET['actividadesSecundaria'];
    $intere = $_GET['intere'];
  /*end*/
  /*productos servicios y area de intereces*/
    $empresa = $_GET['empresa'];
    $webEmpresa =$_GET['webEmpresa'];
    $tipo=$_GET['tipo'];
    $producto = $_GET['producto'];
    $equipos=$_GET['equipos'];
    $pais=$_GET['pais'];
    $software=$_GET['software'];
    $servicios=$_GET['servicios'];
  /*fin*/
  /*Informacion Complementaria*/
    $participacion = $_GET['participacion'];
    $contratistas = $_GET['contratistas'];
    $cencoex = $_GET['cencoex'];
    $facturacion = $_GET['facturacion'];
    $razones = $_GET['razones'];
    $cuota = $_GET['cuota'];
    $fecha= date("Y-m-d ");
  /*fin */

/*fin*/


$representante=0;
// Registro de Empresa
    $sql="INSERT INTO `empresa` (`id`, `rif`, `razon_social`, `capital`, `fecha_constitucion`, `parroquia`, `empleados`, `ciudad`, `direccion_fiscal`, `telefono`,
       `email-generico`, `n_filiares`, `n_sucursale`, `n_sucursale_e`, `representante`, `actividad`, `corporacion`, `pais`, `web`, `representacion`, `productosR`, `equipo`, `sotfware`,
       `servicio`, `area`, `rnc`, `cencoex`, `ingreso_bruto`, `razones`, `cuota`, `fecha_registro`)
       VALUES (NULL, '$rif', '$razon','$capital', '$fecha', '$parroquia', '$empleados', '$ciudad', '$direccion', '$telefono', '$emailGenerico', '$filiales', '$sucursale', '$sucursaleE', '$representante', '$actividades',
    '$empresa', '$pais', '$webEmpresa', '$tipo', '$producto', '$equipos', '$software', '$servicios', '$intere', '$contratistas', '$cencoex', '$facturacion', '$razones', '$cuota', '$fecha');";

    if ($registroEmpresa=mysqli_query($conexion,$sql)){
      //obtener el id de la empresa registrada
       $id_empresa = mysqli_insert_id($conexion);
      //end
      //empresa actividades
        foreach($actividadesSecundaria as $a){
          $sqlActividades="INSERT INTO `empresaActividad` (`id`, `id_actividad`, `id_empresa`) VALUES (NULL, '$a', '$id_empresa');";
          $registrarActividades=mysqli_query($conexion,$sqlActividades);
        }
      //end
      //registro representante legal
        $sqlContactos= "INSERT INTO `contactos` (`id`, `tipo`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `cargo`, `direccion`)VALUES ('', '0', '$nombreR', '$apellidoR', '$cedulaR', '$telefonoR', '$emailR', '$cargoR', '$dirrecionR');";
        $registro_contacto= mysqli_query($conexion,$sqlContactos);
          //obtener el id del conctacto
            $id_representante = mysqli_insert_id($conexion);
          //end
      //end
      //asociar representante legal a la empresa
        $sqlEmpresaContacto="INSERT INTO `empresaConctato` (`id`, `id_empresa`, `id_conctato`) VALUES (NULL, '$id_empresa', '$id_representante');";
        $registro =   mysqli_query($conexion,$sqlEmpresaContacto);
      //end

      //registro otro contacto
      if (isset($_GET['nombreA'] , $_GET['apellidoA'] ,$_GET['cedulaA'] )){
        $sqlContactos= "INSERT INTO `contactos` (`id`, `tipo`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `cargo`, `direccion`)
        VALUES ('', '1', '$nombreA', '$apellidoA', '$cedulaA', '$telefonoA', '$emailA', '$cargoA', 'null');";
        $registro_contacto= mysqli_query($conexion,$sqlContactos);
        $id_representante = mysqli_insert_id($conexion);
        //asociar otro conctato a la empresa
          $sqlEmpresaContacto="INSERT INTO `empresaConctato` (`id`, `id_empresa`, `id_conctato`) VALUES (NULL, '$id_empresa', '$id_representante');";
          $registro =   mysqli_query($conexion,$sqlEmpresaContacto);
        //end
          }
      //end

    }else{
     echo " ocurrio un error al registrar la empresa ";
    }
//fin Registro
?>
