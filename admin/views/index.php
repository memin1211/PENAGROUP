<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    include_once("../include/header.php");
    $Sucursal="";
    include_once("../include/panel.php");
  }else {
    header('Location: ../');
  }
?>
<body>
  <div class="container" id="contenedor">
    <div class="row m1">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <a href="modulo.php?sucursal=SANTA_MARIA"><img src="../assets/img/Sucursal_Santa_Maria.png" alt="Santa Maria" title="SANTA MARIA" class="sucursal">
     </a>
     </div>
      <div  class="col-sm-3 col-md-3 col-lg-3">
        <a href="modulo.php?sucursal=SAGRADA_FAMILIA"><img src="../assets/img/Sucursal_Sagrada_Familia.png" alt="Sagrada Familia" title="SAGRADA FAMILIA" class="sucursal">
     </a>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
  </div>
</body>
</html>
