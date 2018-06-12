<?php
  session_start();
  if (isset($_SESSION['usuario_actual'])) {
    $Bitacora_Variable=$_REQUEST['v'];
    if ($Bitacora_Variable==1) {
      $Accion = "El Usuario ha Iniciado Sesión";
    }elseif ($Bitacora_Variable==2) {
      $Accion = "El Usuario ha Retornado a Sucursales";
    }

    if ($_SESSION['usuario_actual']['Tipo_Usuario']=="Cliente") {
      header('Location: ../../usuario/views/');
    }
    require_once("../../db/conexion.php");
    include_once("../include/bitacora.php");
    include_once("../include/header.php");
    $Sucursal="";
    include_once("../include/panel.php");
    //Consultando Sucursales para el Usuario Actual
    $IdUsuario=$_SESSION['usuario_actual']['Id'];
    $sql=$mysqli->prepare("SELECT C.Id,C.Nombre_Corto,C.Logo FROM erp_sucursal_usuario A INNER JOIN erp_usuario B ON (A.Id_Usuario = B.Id_Usuario) INNER JOIN erp_sucursal C ON (A.Id_Sucursal = C.Id) WHERE C.Id_Estado=1 AND B.Id_Usuario = ?");
    $sql->bind_param('s',$IdUsuario);
    $sql->execute();
    $rs=$sql->get_result();
  }else {
    header('Location: ../');
  }
?>
<body>
  <div class="container" id="contenedor">
    <div class="row m1">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
      <?php
      while ($Sucursal=$rs->fetch_assoc()) {
        ?>
        <div class="col-sm-3 col-md-3 col-lg-3">
          <a href="modulo.php?sucursal=<?= $Sucursal['Nombre_Corto']; ?>&v=1"><img src="<?= $Sucursal['Logo']; ?>" alt="<?= $Sucursal['Nombre_Corto']; ?>" title="<?= $Sucursal['Nombre_Corto']; ?>" class="sucursal">
       </a>
       </div>
        <?php
      }
      ?>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
  </div>
</body>
</html>
