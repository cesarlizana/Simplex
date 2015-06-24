<?php
session_start();
include("../Conexion.php");  

if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {

	if ($_POST["Grabar"]){
		$editar="update inicio set 
		texto_slide1  = '$_POST[texto_slide1]',
		texto_slide2  = '$_POST[texto_slide2]',
		texto_slide3  = '$_POST[texto_slide3]',
		contenido_slide1  = '$_POST[contenido_slide1]',
		contenido_slide2  = '$_POST[contenido_slide2]',
		contenido_slide3  = '$_POST[contenido_slide3]',
		titulo1  = '$_POST[titulo1]',
		titulo2  = '$_POST[titulo2]',
		contenido1  = '$_POST[contenido1]',
    titulo3  = '$_POST[titulo3]',
    contenido2  = '$_POST[contenido2]',
    titulo4  = '$_POST[titulo4]',
    contenido3  = '$_POST[contenido3]',
    titulo5  = '$_POST[titulo5]',
    contenido4  = '$_POST[contenido4]'";
		$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<title>Admin</title>

</head>

<body>
  <?php

	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$texto_slide1 = $rs["texto_slide1"];
		$texto_slide2 = $rs["texto_slide2"];
		$texto_slide3 = $rs["texto_slide3"];
		$contenido_slide1 = $rs["contenido_slide1"];
		$contenido_slide2 = $rs["contenido_slide2"];
		$contenido_slide3 = $rs["contenido_slide3"];
		$titulo1 = $rs["titulo1"];
		$titulo2 = $rs["titulo2"];
		$contenido1 = $rs["contenido1"];
    $titulo3 = $rs["titulo3"];
    $contenido2 = $rs["contenido2"];
    $titulo4 = $rs["titulo4"];
    $contenido3 = $rs["contenido3"];
    $titulo5 = $rs["titulo5"];
    $contenido4 = $rs["contenido4"];	
  }
	?>
  <form action="inicio.php" method="post" name="form1" id="form1">
    
    <table width="56%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Slide</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Texto Slide1:&nbsp;</p></td>
        <td valign="top"><input name="texto_slide1" type="text" id="texto_slide1" value="<?php echo $texto_slide1; ?> " size="50"></td>
      </tr>
      <tr>
              <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
              <td valign="top"><textarea name="contenido_slide1" id="contenido_slide1" cols="50" rows="5   "><?php echo $contenido_slide1; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/index/Upload_foto.php?id=1" class="texto">Cambiar Imagen:</a>&nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/1.jpg" width="400" height="150"></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
            <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Texto Slide2:</p></td>
        <td valign="top"><input name="texto_slide2" type="text" id="texto_slide2" value="<?php echo $texto_slide2; ?> " size="50"></td>
      </tr>
      <tr>
              <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
              <td valign="top"><textarea name="contenido_slide2" id="contenido_slide2" cols="50" rows="5"><?php echo $contenido_slide2; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/index/Upload_foto.php?id=2" class="texto">Cambiar Imagen:</a>&nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/2.jpg" width="400" height="150"></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
            <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Texto Slide3:&nbsp;</p></td>
        <td valign="top"><input name="texto_slide3" type="text" id="texto_slide3" value="<?php echo $texto_slide3; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto">&nbsp;</td>
              <td valign="top"><textarea name="contenido_slide3" id="contenido_slide3" cols="50" rows="5      "><?php echo $contenido_slide3; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/index/Upload_foto.php?id=3" class="texto">Cambiar Imagen:</a>&nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/3.jpg" width="400" height="150"></td>
      </tr>

      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Parrafo 1</strong></div></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Título 1 : &nbsp;</p></td>
        <td valign="top"><textarea name="titulo1" id="titulo1" cols="50" rows="2
        "><?php echo $titulo1; ?> </textarea></td>
      </tr>
       <tr>
        <td colspan="3"><div align="center" class="titulos"></div></td>
      </tr>
       <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Parrafo 2</strong></div></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Título 2 : &nbsp;</p></td>
        <td valign="top"><textarea name="titulo2" id="titulo2" cols="50" rows="2
        "><?php echo $titulo2; ?> </textarea></td>
      </tr>
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido 1: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido1" id="contenido1" cols="50" rows="12
        "><?php echo $contenido1; ?> </textarea></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Título 3 : &nbsp;</p></td>
        <td valign="top"><textarea name="titulo3" id="titulo3" cols="50" rows="2
        "><?php echo $titulo3; ?> </textarea></td>
      </tr>
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido 2: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido2" id="contenido2" cols="50" rows="12
        "><?php echo $contenido2; ?> </textarea></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Título 4 : &nbsp;</p></td>
        <td valign="top"><textarea name="titulo4" id="titulo4" cols="50" rows="2
        "><?php echo $titulo4; ?> </textarea></td>
      </tr>
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido 3: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido3" id="contenido3" cols="50" rows="12
        "><?php echo $contenido3; ?> </textarea></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Título 5 : &nbsp;</p></td>
        <td valign="top"><textarea name="titulo5" id="titulo5" cols="50" rows="2
        "><?php echo $titulo5; ?> </textarea></td>
      </tr>
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido 4: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido4" id="contenido4" cols="50" rows="12
        "><?php echo $contenido4 ?> </textarea></td>
      </tr>
      <tr>
        <td height="18" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="49" colspan="3"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto">Volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>