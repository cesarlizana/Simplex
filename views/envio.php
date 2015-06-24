<?
include("Conexion.php");
  $listado = "select * from contacto";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $correoenvia = $rs["correo"];
  }

	$ip = $_SERVER['REMOTE_ADDR'];
    $fecha= date('Y-m-d');
    $listado = "SELECT COUNT(*) AS contador from consultas where ip ='$ip' and fecha ='$fecha' ";
    $sentencia = mysql_query($listado,$conn);
    if($rs=mysql_fetch_array($sentencia,$mibase)){
        $contador = $rs["contador"];
    } 
    if ($contador < 9){
		$mensaje="La consulta es la siguiente:". "\n\n";
		$mensaje.="Nombre: ".$_POST['Nombre']."\n";
		$mensaje.="Telefono: ".$_POST['Telefono']."\n";
		$mensaje.="Mail: ".$_POST['Mail']."\n";
		$mensaje.="Mensaje: ".$_POST['Mensaje']."\n";
		$email_destiny=$correoenvia;
		$subject="Asunto: Consulta sitio web";
		if (mail($email_destiny,$subject,$mensaje,"From: ".$_POST['Nombre']."<".$_POST['Mail'].">")) {
			$insertar="INSERT INTO consultas (ip, fecha)";
			$insertar.="VALUES('$ip', '$fecha')";
			$sentencia = mysql_query($insertar,$conn)or die("Error al grabar la consulta");
			header("location: postenvio","_self");
		} else {
			echo '<p align="center">Error al enviar el e-mail';
			header("location: errorenvio","_self");
		}
	} else {
		header("location: errorenvio","_self");
    }
?>