<?php
require_once("../include/validarSesionIframe.php");
   $Cod_Accion=$_REQUEST['Cod_Accion'];
   $Formulario=$_REQUEST['Formulario'];
   $IdSucursal=$_REQUEST['IdSucursal'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
if ($Formulario == 'Modificar')
{
?>
<div>
<div class="row" style="margin-left:0px; width:100%;">
   <iframe name="contenidoaccion" id="contenidoaccion" src="ModificarSucursal.php?Cod_Accion=<?= $Cod_Accion;?>&IdSucursal=<?= $IdSucursal; ?>" width="100%" height="500px" rameborder="0" scrolling="no" style="background-color:white;"></iframe>
</div>
</div>
<?php
}
?>
</body>
</html>
