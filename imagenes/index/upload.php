
<? 
//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = $_GET["id"]; 

//datos del arhivo 
$nombre_archivo = $cadenatexto .".jpg";
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
       echo "<div align=center>El archivo ha sido cargado correctamente.</div>"; 
	   echo "<div align=center><a href=../../plataforma/inicio.php>";
	   echo "VOLVER</a></div>";
    }else{ 
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
    } 
?> 