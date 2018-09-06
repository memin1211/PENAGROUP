<?php
  session_start();
  if (isset($_SESSION['usuario_actual'])) {
    $Sucursal=$_REQUEST['sucursal'];
    $Id_Sucursal=$_REQUEST['Id_Sucursal'];
    $Bitacora_Variable=$_REQUEST['v'];
    if ($Bitacora_Variable==1) {
      $Accion = "El Usuario ha Ingresado a Sucursal ".$Sucursal;
    }elseif ($Bitacora_Variable==2) {
      $Accion = "El Usuario ha Retornado al Menu Principal de Modulos de la Sucursal ".$Sucursal;
    }
    if ($_SESSION['usuario_actual']['Tipo_Usuario']=="Cliente") {
      header('Location: ../../usuario/views/');
    }
    require_once("../../db/conexion.php");
    include_once("../include/bitacora.php");
    include_once("../include/header.php");
    include_once("../include/panel.php");
  }else {
    header('Location: ../');
  }
?>
<body>
   <?php
               $sql=$mysqli->prepare("SELECT DISTINCT T2.Id,T2.Nombre,T2.Logo,T1.Id_Modulo AS IdModuloAsig,T1.Nombre AS moduloAsig, CASE WHEN T1.Id_Modulo IS NULL THEN 'I' ELSE 'A' END AS Estado FROM ( SELECT E.Id_Modulo,G.Nombre FROM erp_menu_usuario A INNER JOIN erp_usuario B ON (B.Id = A.Id_Usuario) INNER JOIN erp_menu E ON (E.Id = A.Id_Menu AND A.Id_Estado=1) INNER JOIN erp_menu F ON (F.Id = E.Id_Menu_Padre AND A.Id_Estado=1) INNER JOIN erp_modulo G ON (G.Id=E.Id_Modulo AND G.Id_Estado=1) WHERE B.Id_Usuario=? GROUP BY E.Id )AS T1 RIGHT JOIN erp_modulo T2 ON (T2.Id = T1.Id_Modulo) ORDER BY T2.Id ASC");
                $sql->bind_param('s',$_SESSION['usuario_actual']['Id']);
                $sql->execute();
                $rs=$sql->get_result();
   ?>
   <div class="container" id="contenedor">
      <div class="row m1">
         <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>

         <?php
         if ($rs->num_rows>0){
           while ($datos= $rs->fetch_assoc()) {
              //Creamos un array para poder acceder a los Estados de Cada Modulo Segun el Tipo de Usuario
             if ($datos['Estado']=='A') {
               ?>
               <div class="col-sm-2 col-md-2 col-lg-2">
                 <a href="gestion.php?modulo=<?= $datos['Id']; ?>&Id_Sucursal=<?= $Id_Sucursal; ?>&sucursal=<?= $Sucursal; ?>&v=1"><img src="<?= $datos['Logo']; ?>" alt="Modulo de <?= $datos['Nombre']; ?>" title="<?= $datos['Nombre']; ?>" class="modulos"></a>
               </div>
               <?php
             }else {
               ?>
               <div class="col-sm-2 col-md-2 col-lg-2">
                 <img src="<?= $datos['Logo']; ?>" alt="Modulo de <?= $datos['Nombre']; ?>" title="<?= $datos['Nombre']; ?>" class="modulos"></a>
               </div>
               <?php
             }
           }
         }
         ?>

       <div  class="col-sm-2 col-md-2 col-lg-2">
          <a href="index.php?v=2"><img src="../assets/img/admin/Cambir_Sucursal.png" alt="Modulo de Inventario" title="CAMBIAR SUCURSAL" class="modulos"></a>
       </div>
       <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
 </div>
   <?php
      $mysqli->close();
      ?>
</body>
</html>
