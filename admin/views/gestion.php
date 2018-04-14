<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    $Sucursal=$_REQUEST['sucursal'];
    include_once("../include/panel.php");
    include_once("../include/menu.php");
  }else {
    header('Location: ../../');
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>.::PENAGROUP::.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../assets/css/compiled.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
    <style media="screen">
      a{
       color: white;
      }
      a:hover{
       color: white;
      }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114067464-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114067464-1');
    </script>
  </head>
  <body>

  </body>
</html>
