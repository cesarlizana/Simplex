<?php
	$conn=mysql_connect("localhost","root","root"); 
	$mibase = mysql_select_db("simplex",$conn); 
	$listadonoticias = "select * from noticias order by id desc ";
	$sentenciasnoticias = mysql_query($listadonoticias,$conn);
	if($rssnoti=mysql_fetch_array($sentenciasnoticias,$mibase)){
		$urlnoticias = $rssnoti["url"];
  	}
  	$listado = "select * from inicio";
  	$sentencia = mysql_query($listado,$conn);
  	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$texto_slide1 = $rs["texto_slide1"]; 
		$texto_slide2 = $rs["texto_slide2"];
		$texto_slide3 = $rs["texto_slide3"];
		$contenido_slide1 = str_replace("\r\n","<br>",$rs["contenido_slide1"]);
		$contenido_slide2 = str_replace("\r\n","<br>",$rs["contenido_slide2"]);
		$contenido_slide3 = str_replace("\r\n","<br>",$rs["contenido_slide3"]);
		$titulo1 = $rs["titulo1"];
		$titulo2 = $rs["titulo2"];
		$titulo3 = $rs['titulo3'];
		$titulo4 = $rs['titulo4'];
		$titulo5 = $rs['titulo5'];
		$contenido1 = str_replace("\r\n","<br>",htmlentities($rs["contenido1"]));
		$contenido2 = str_replace("\r\n","<br>",htmlentities($rs["contenido2"]));
		$contenido3 = str_replace("\r\n","<br>",htmlentities($rs["contenido3"])); 
		$contenido4 = str_replace("\r\n","<br>",htmlentities($rs["contenido4"]));  
		$titulofooter = $rs["titulofooter"]; 
  	}
  	$listado = "select * from contacto";
  	$sentencia = mysql_query($listado,$conn);
  	if($rs=mysql_fetch_array($sentencia,$mibase)){    
    	$contenido = $rs['contenido'];
    	$correo = $rs["correo"];
    	$fono = $rs['fono'];
    	$direccion = $rs['direccion'];
  	}