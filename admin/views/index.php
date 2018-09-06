<?php
  session_start();
  if (isset($_SESSION['usuario_actual'])) {
    $Bitacora_Variable=$_REQUEST['v'];
    if ($Bitacora_Variable==1) {
      $Accion = "El Usuario ha Iniciado Sesión";
    }elseif ($Bitacora_Variable==2) {
      $Accion = "El Usuario ha Retornado a Sucursales";
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
    header('Location: ../../');
  }
?>
<body>
   <div class="container" id="DivSucursal">
      <div class="row">
         <div class="col-12">
            <!--Jumbotron-->
            <div class="jumbotron text-center blue-grey lighten-5 ">
                <!--Text-->
                <div class="d-flex justify-content-center">
                  <?php
                  while ($Sucursal=$rs->fetch_assoc()) {
                    ?>
                    <div class="col-4">
                      <a href="modulo.php?Id_Sucursal=<?= $Sucursal['Id']; ?>&sucursal=<?= $Sucursal['Nombre_Corto']; ?>&v=1"><img src="<?= $Sucursal['Logo']; ?>" alt="<?= $Sucursal['Nombre_Corto']; ?>" title="<?= $Sucursal['Nombre_Corto']; ?>" class="sucursal"></a>
                    </div>
                    <?php
                  }
                  ?>
                </div>
                <hr class="my-4 pb-2">
            </div>
            <!--Jumbotron-->
         </div>
      </div>
   </div>
</body>
</html>
