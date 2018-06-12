<?php
require_once("../include/validarSesion.php");
$IdModulo=$_REQUEST['modulo'];
?>
<body>
   <?php
               $sql=$mysqli->prepare("SELECT Nombre, Logo FROM erp_modulo WHERE Id=?");
                $sql->bind_param('s',$IdModulo);
                $sql->execute();
                $rs=$sql->get_result();
   ?>
   <div class="container" id="contenedor">
      <div class="row m1">
         <div class="col-sm-2 col-md-4 col-lg-4 col-xl-4"></div>

         <?php
         if ($rs->num_rows>0){
           while ($datos= $rs->fetch_assoc()) {
               ?>
               <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                 <img src="<?= $datos['Logo']; ?>" alt="Modulo de <?= utf8_encode($datos['Nombre']); ?>" title="<?= utf8_encode($datos['Nombre']); ?>" class="modulos"></a>
               </div>
               <?php

               $Bitacora_Variable=$_REQUEST['v'];
               if ($Bitacora_Variable==1) {
                 $Accion = "El Usuario ha Ingresado al Modulo de ".$datos['Nombre'];
               }elseif ($Bitacora_Variable==2) {
                 $Accion = "El Usuario ha Retornado al Modulo de ".$datos['Nombre'];
               }
           }
           require_once("../include/bitacora.php");
         }
         ?>
       <div class="col-sm-2 col-md-4 col-lg-4 col-xl-4"></div>
    </div>
 </div>
   <?php
      $mysqli->close();
      ?>
</body>
</html>
