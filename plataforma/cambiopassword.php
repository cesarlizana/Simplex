<?php
session_start();

if ($_POST["Grabar"]){
	$listado = "select * from  usuario";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$textoesp = $rs["password"];
		$actual = ($_POST["actual"]);
	}
	if ($textoesp <> $actual){
		echo "Su password actual no fue bien escrita";
	}elseif ($_POST["nueva1"] <> $_POST["nueva2"]){
		echo "No repitio correctamente su password nueva";
	} else{
		$nuevafinal = ($_POST["nueva1"]);
		$editar="update usuario  set password    = '$nuevafinal' ";
		$sentencia = mysql_query($editar,$conn)or die("Error al grabar la venta: ".mysql_error);
		echo "Su password se actualizo correctamente";
	}
	

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
<link href="../Letras.css" rel="stylesheet" type="text/css" />
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
</style><title>Inicio</title></head>

<body>

  <form id="form1" name="form1" method="post" action="cambiopassword.php">
    <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center" class="Subtitulo1">cambio de password</td>
      </tr>
      <tr>
        <td class="Letras1">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="32%" class="PreSubtitulo1">Password actual</td>
        <td width="68%"><label for="actual"></label>
        <input type="password" name="actual" id="actual"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="PreSubtitulo1">Nueva password</td>
        <td><input type="password" name="nueva1" id="nueva1"></td>
      </tr>
      <tr>
        <td class="PreSubtitulo1">Repita nueva password</td>
        <td><input type="password" name="nueva2" id="nueva2"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="Grabar" id="Grabar" value="Grabar"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="sesion.php" class="Subtitulo1">Volver</a></p>
</form>
</body>
</html>
