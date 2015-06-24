<?php
session_start();
include("../Conexion.php");  

if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {

	if ($_POST["Grabar"]){
	  $editar="update proyectos set 
		titulo1  = '$_POST[titulo1]',
		titulo2  = '$_POST[titulo2]',	
		contenido  = '$_POST[contenido]',
		texto_proyecto1 = '$_POST[texto_proyecto1]',
		contenido_proyect1 = '$_POST[contenido_proyecto1]',
    texto_proyecto2  = '$_POST[texto_proyecto2]',
		contenido_proyect2 = '$_POST[contenido_proyecto2]',
		texto_proyecto3  = '$_POST[texto_proyecto3]',
		contenido_proyect3 = '$_POST[contenido_proyecto3]',
    texto_proyecto4  = '$_POST[texto_proyecto4]',
    contenido_proyect4 = '$_POST[contenido_proyecto4]', 
    texto_proyecto5  = '$_POST[texto_proyecto5]',
    contenido_proyect5 = '$_POST[contenido_proyecto5]',
    texto_proyecto6  = '$_POST[texto_proyecto6]',
    contenido_proyect6 = '$_POST[contenido_proyecto6]',
    texto_proyecto7  = '$_POST[texto_proyecto7]',
    contenido_proyect7 = '$_POST[contenido_proyecto7]',
    texto_proyecto8  = '$_POST[texto_proyecto8]',
    contenido_proyect8 = '$_POST[contenido_proyecto8]',
    texto_proyecto9  = '$_POST[texto_proyecto9]',
    contenido_proyect9 = '$_POST[contenido_proyecto9]',
    titulo_proyecto = '$_POST[titulo_proyecto]'";
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

	$listado = "select * from proyectos";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo1 = $rs["titulo1"];
		$titulo2 = $rs["titulo2"];
		$contenido = $rs["contenido"];
		$texto_proyecto1 = $rs["texto_proyecto1"];
		$contenido_proyecto1 = $rs["contenido_proyecto1"];
		$texto_proyecto2 = $rs["texto_proyecto2"];
    $contenido_proyecto2 = $rs["contenido_proyect2"];
    $texto_proyecto3 = $rs["texto_proyecto3"];
    $contenido_proyecto3 = $rs["contenido_proyecto3"];
    $texto_proyecto4 = $rs["texto_proyecto4"];
    $contenido_proyecto4 = $rs["contenido_proyect4"];
    $texto_proyecto5 = $rs["texto_proyecto5"];
    $contenido_proyecto5 = $rs["contenido_proyect5"];
    $texto_proyecto6 = $rs["texto_proyecto6"];
    $contenido_proyecto6 = $rs["contenido_proyect6"];
    $texto_proyecto7 = $rs["texto_proyecto7"];
    $contenido_proyecto7 = $rs["contenido_proyect7"];
    $texto_proyecto8 = $rs["texto_proyecto8"];
    $contenido_proyecto8 = $rs["contenido_proyect8"];
    $texto_proyecto9 = $rs["texto_proyecto9"];
    $contenido_proyecto9 = $rs["contenido_proyect9"];
    $titulo_proyecto = $rs["titulo_proyecto"];          	
  }
	?>
  <form action="proyectos.php" method="post" name="form1" id="form1">
    
    <table width="56%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Proyectos</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo1:&nbsp;</p></td>
        <td valign="top"><input name="titulo1" type="text" id="titulo1" value="<?php echo $titulo1 ?> " size="50"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>titulo2:&nbsp;</p></td>
        <td valign="top"><input name="titulo2" type="text" id="titulo2" value="<?php echo $titulo2; ?> " size="50"></td>
      </tr>
      <tr>
          <td height="80" align="right" valign="top" class="texto"><p>Contenido:&nbsp;</p></td>
          <td valign="top"><textarea name="contenido" id="contenido" cols="50" rows="5"><?php echo $contenido; ?> </textarea></td>
      </tr>
  
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto1</p></td>
        <td valign="top"><input name="texto_proyecto1" type="text" id="texto_proyecto1" value="<?php echo $texto_proyecto1; ?> " size="50"></td>
      </tr>
      <tr>
          <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
          <td valign="top"><textarea name="contenido_proyecto1" id="contenido_proyecto1" cols="50" rows="5"><?php echo $contenido_proyecto1; ?> </textarea></td>
      </tr>      
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
       <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto2:&nbsp;</p></td>
        <td valign="top"><input name="texto_proyecto2" type="text" id="texto_proyecto2" value="<?php echo $texto_proyecto2; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido proyecto2 : &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto2" id="contenido_proyecto2" cols="50" rows="5"><?php echo $contenido_proyecto2 ?> </textarea></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto3:&nbsp;</p></td>
        <td valign="top"><input name="texto_proyecto3" type="text" id="texto_proyecto3" value="<?php echo $texto_proyecto3; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Contenido proyecto3:&nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto3" id="contenido_proyecto3" cols="50" rows="2"><?php echo $contenido_proyecto3; ?> </textarea></td>
      </tr>
       <tr>
        <td colspan="3"><div align="center" class="titulos"></div></td>
      </tr>
       <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto4:&nbsp;</p></td>
        <td valign="top"><input name="texto_proyecto4" type="text" id="texto_proyecto4" value="<?php echo $texto_proyecto4; ?> " size="50"></td>
      </tr>    
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Contenido proyecto4:&nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto4" id="contenido_proyecto4" cols="50" rows="2
        "><?php echo $contenido_proyecto4; ?> </textarea></td>
      </tr>
       <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto5:&nbsp;</p></td>
        <td valign="top"><input name="texto_proyecto5" type="text" id="texto_proyecto5" value="<?php echo $texto_proyecto5; ?> " size="50"></td>
      </tr>   
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido proyecto5: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto5" id="contenido_proyecto5" cols="50" rows="12
        "><?php echo $contenido_proyecto5; ?> </textarea></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto6:&nbsp;</p></td>
        <td valign="top"><input name="texto_proyecto6" type="text" id="texto_proyecto6" value="<?php echo $texto_proyecto6; ?> " size="50"></td>
      </tr> 
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido proyecto6: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto6" id="contenido_proyecto6" cols="50" rows="12
        "><?php echo $contenido_proyecto6; ?> </textarea></td>
      </tr>
      <tr>
       <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto7:&nbsp;</p></td>
       <td valign="top"><input name="texto_proyecto7" type="text" id="texto_proyecto7" value="<?php echo $texto_proyecto7; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="201" align="right" valign="top" class="texto"><p>Contenido proyecto7 &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto7" id="contenido_proyecto7" cols="50" rows="12
        "><?php echo $contenido_proyecto7; ?> </textarea></td>
      </tr>
      <tr>
       <td height="20" align="right" valign="middle" class="texto"><p>Titulo_proyecto8:&nbsp;</p></td>
       <td valign="top"><input name="texto_proyecto8" type="text" id="texto_proyecto8" value="<?php echo $texto_proyecto8; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Contenido proyecto8&nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto8" id="titulo5" cols="50" rows="2"><?php echo $contenido_proyecto8; ?> </textarea></td>
      </tr>
      <tr>
       <td height="20" align="right" valign="middle" class="texto"><p>titulo_proyecto9:&nbsp;</p></td>
       <td valign="top"><input name="texto_proyecto9" type="text" id="texto_proyecto9" value="<?php echo $texto_proyecto9; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="43" align="right" valign="middle" class="texto"><p>Contenido proyecto9&nbsp;</p></td>
        <td valign="top"><textarea name="contenido_proyecto9" id="contenido_proyecto9" cols="50" rows="2"><?php echo $contenido_proyecto9; ?> </textarea></td>
      </tr>
       <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>titulo_proyecto</p></td>
        <td valign="top"><input name="titulo_proyecto" type="text" id="titulo_proyecto" value="<?php echo $titulo_proyecto; ?> " size="50"></td>
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