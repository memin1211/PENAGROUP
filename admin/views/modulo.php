<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    include_once("../include/header.php");
    include_once("../../db/conexion.php");
    $Sucursal="";
    include_once("../include/panel.php");
  }else {
    header('Location: ../');
  }
?>
<body>
   <?php
               $sql=$mysqli->prepare("SELECT T2.IdModulo,T2.NombreModulo,T1.IdModulo AS IdModuloAsig,T1.NombreModulo AS moduloAsig,
                          CASE WHEN T1.IdModulo IS NULL THEN 'I' ELSE 'A' END AS Estado FROM (
                            SELECT C.IdModulo,E.NombreModulo FROM menusuario A
                            INNER JOIN usuario B ON (A.IdUsuario = B.IdUsuario)
                            INNER JOIN menu C ON (A.IdMenu = C.IdPadre AND C.IdEstado = 'E1')
                            INNER JOIN menu D ON (C.IdPadre = D.IdMenu AND D.IdEstado = 'E1')
                            INNER JOIN modulos E ON (C.IdModulo = E.IdModulo)
                            WHERE A.IdUsuario = ? AND A.IdEstado = 'E1' GROUP BY C.IdModulo
                            )AS T1
                          RIGHT JOIN modulos T2 ON (T2.IdModulo = T1.IdModulo)
                          ORDER BY T2.IdModulo ASC");
                $sql->bind_param('s',$_SESSION['actual']['IdUsuario']);
                $sql->execute();
                $rs=$sql->get_result();
                if ($rs->num_rows>0){
                  while ($datos= $rs->fetch_assoc()) {
                     $Estado[]=$datos['Estado']; //Creamos un array para poder acceder a los Estados de Cada Modulo Segun el Tipo de Usuario
                  }

                }
   ?>
   <div class="container" id="contenedor">
      <div class="row m1">
         <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
         <div class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[0]=='A') {
             ?>
             <a href="gestion.php?modulo=M1&sucursal=<?php echo $Sucursal ?>"><img src="../assets/img/admin/Modulo_Administracion.png" alt="Modulo de Administracion" title="ADMINISTRACIÓN" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../assets/img/admin/Modulo_Administracion.png" alt="Modulo de Administracion" title="ADMINISTRACIÓN" class="modulos"></i>
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[1]=='A') {
             ?>
             <a href="gestion.php?modulo=M2&sucursal=<?php echo $Sucursal ?>"><img src="../assets/img/admin/Punto_de_Venta.png" alt="Modulo de Ventas" title="PUNTO DE VENTA" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../assets/img/admin/Punto_de_Venta.png" alt="Modulo de Ventas" title="PUNTO DE VENTA" class="modulos">
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[2]=='A') {
             ?>
             <a href="gestion.php?modulo=M3&sucursal=<?php echo $Sucursal ?>"><img src="../assets/img/admin/Modulo_Inventario.png" alt="Modulo de Inventario" title="INVENTARIO" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../assets/img/admin/Modulo_Inventario.png" alt="Modulo de Inventario" title="INVENTARIO" class="modulos">
             <?php
           }
           ?>
       </div>
       <div class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[3]=='A') {
             ?>
             <a href="gestion.php?modulo=M4&sucursal=<?php echo $Sucursal ?>"><img src="../assets/img/admin/Modulo_Contabilidad.png" alt="Modulo de Contabilidad" title="CONTABILIDAD" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../assets/img/admin/Modulo_Contabilidad.png" alt="Modulo de Contabilidad" title="CONTABILIDAD" class="modulos">
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
          <a href="index.php"><img src="../assets/img/admin/Cambir_Sucursal.png" alt="Modulo de Inventario" title="CAMBIAR SUCURSAL" class="modulos"></a>
       </div>
       <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
 </div>
   <?php
      $mysqli->close();
      ?>
</body>
</html>
