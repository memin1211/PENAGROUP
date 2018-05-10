<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../usuario/views/');
    }
    $Sucursal="";
    include_once("include/panel.php");
  }else {
    header('Location: ../');
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
    <link href="../assets/css/compiled.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style media="screen">
    #contenedor{
      position: inherit;
      width: 100%;
      min-height: 10px;
      margin-top:23%;
    }

    .m1{
      align-content: stretch;
    }

    .font{
    color:#3f5c80;
    }

    .sucursal{
     width: 75%;
     display: block;
     margin-left: auto;
     margin-right: auto;
    }
    </style>
    <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114067464-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114067464-1');
    </script>
  -->
</head>
<body>
  <div class="container" id="contenedor">
    <div class="row m1">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <a href="views/index.php?sucursal=SANTA_MARIA"><img src="../assets/img/Sucursal.png" alt="Santa Maria" title="SANTA MARIA" class="sucursal">
        <font color="#027abe" style="font-size:25px; margin-left:35px;"><b>SANTA MARIA</b></font>
     </a>
     </div>
      <div  class="col-sm-3 col-md-3 col-lg-3">
        <a href="views/index.php?sucursal=SAGRADA_FAMILIA"><img src="../assets/img/Sucursal.png" alt="Sagrada Familia" title="SAGRADA FAMILIA" class="sucursal">
        <font color="#027abe" style="font-size:25px; margin-left:20px;"><b>SAGRADA FAMILIA</b></font>
     </a>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
  </div>
</body>
</html>
