<?php
session_start();
include("../Conexion.php");  

if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {

	if ($_POST["Grabar"]){
		$editar="update quienessomos set 
		texto1  = '$_POST[texto1]',
		texto2  = '$_POST[texto2]',		
		contenido1  = '$_POST[contenido1]',
		contenido2  = '$_POST[contenido2]',
		contenido3  = '$_POST[contenido3]'	
    ";
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
	$listado = "select * from quienessomos";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$texto1 = $rs["texto1"];
		$texto2 = $rs["texto2"];	
		$contenido1 = $rs["contenido1"];
		$contenido2 = $rs["contenido2"];
		$contenido3 = $rs["contenido3"];	
  }
	?>
  <form action="quienes_somos.php" method="post" name="form1" id="form1">
    
    <table width="56%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Slide</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Texto1:&nbsp;</p></td>
        <td valign="top"><input name="texto1" type="text" id="texto1" value="<?php echo $texto1; ?> " size="50"></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle" class="texto"><p>Texto2:&nbsp;</p></td>
        <td valign="top"><input name="texto2" type="text" id="texto2" value="<?php echo $texto2; ?> " size="50"></td>
      </tr>
        <tr>
           <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
           <td valign="top"><textarea name="contenido1" id="contenido1" cols="50" rows="5   "><?php echo $contenido1; ?> </textarea></td>
      </tr>
      <tr>
          <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
          <td valign="top"><textarea name="contenido2" id="contenido2" cols="50" rows="5   "><?php echo $contenido2; ?> </textarea></td>
      </tr> 
      <tr>
          <td height="80" align="right" valign="top" class="texto">&nbsp;</td>
          <td valign="top"><textarea name="contenido3" id="contenido3" cols="50" rows="5   "><?php echo $contenido3; ?> </textarea></td>
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