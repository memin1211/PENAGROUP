<?php
   $Cod_Accion=$_REQUEST['Cod_Accion'];
   $Formulario=$_REQUEST['Formulario'];
   $IdUsuario=$_REQUEST['IdUsuario'];
?>
<html>
<head>
   <meta charset="utf-8">
   <meta name='viewport' content='width=device-width initial-scale=1'>
   <meta name='mobile-web-app-capable' content='yes'>
   <title></title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Bootstrap core CSS -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="../assets/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<?php
if ($Formulario == 'Modificar')
{
?>
<div>
<div class="row" style="margin-left:0px; width:100%;">
   <iframe name="contenidoaccion" id="contenidoaccion" src="ModificarPermisos.php?Cod_Accion=<?= $Cod_Accion;?>&IdUsuario=<?= $IdUsuario; ?>" width="100%" height="500px" rameborder="0" scrolling="no" style="background-color:white;"></iframe>
</div>
</div>
<?php
}
?>
</body>
</html>
