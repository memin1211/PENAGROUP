<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    $Sucursal=$_REQUEST['sucursal'];
    include_once("../include/panel.php");
    include_once("../../db/conexion.php");
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
    <link rel="icon" type="image/ico" href="../../assets/img/icono.ico" />
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

    .modulos{
     width: 75%;
     display: block;
     margin-left: auto;
     margin-right: auto;
    }
    </style>
    <style media="screen">
     a{
      color: white;
     }
     a:hover{
      color: white;
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
             <a href="gestion.php?modulo=M1&sucursal=<?php echo $Sucursal ?>"><img src="../../assets/img/admin/Modulo_Administracion.png" alt="Modulo de Administracion" title="ADMINISTRACIÓN" class="modulos"></i></a>
             <?php
           }else {
             ?>
             <img src="../../assets/img/admin/Modulo_Administracion.png" alt="Modulo de Administracion" title="ADMINISTRACIÓN" class="modulos"></i>
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[1]=='A') {
             ?>
             <a href="gestion.php?modulo=M2&sucursal=<?php echo $Sucursal ?>"><img src="../../assets/img/admin/Punto_de_Venta.png" alt="Modulo de Ventas" title="PUNTO DE VENTA" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../../assets/img/admin/Punto_de_Venta.png" alt="Modulo de Ventas" title="PUNTO DE VENTA" class="modulos">
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[2]=='A') {
             ?>
             <a href="gestion.php?modulo=M3&sucursal=<?php echo $Sucursal ?>"><img src="../../assets/img/admin/Modulo_Inventario.png" alt="Modulo de Inventario" title="INVENTARIO" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../../assets/img/admin/Modulo_Inventario.png" alt="Modulo de Inventario" title="INVENTARIO" class="modulos">
             <?php
           }
           ?>
       </div>
       <div class="col-sm-2 col-md-2 col-lg-2">
           <?php
           if ($Estado[3]=='A') {
             ?>
             <a href="gestion.php?modulo=M4&sucursal=<?php echo $Sucursal ?>"><img src="../../assets/img/admin/Modulo_Contabilidad.png" alt="Modulo de Contabilidad" title="CONTABILIDAD" class="modulos"></a>
             <?php
           }else {
             ?>
             <img src="../../assets/img/admin/Modulo_Contabilidad.png" alt="Modulo de Contabilidad" title="CONTABILIDAD" class="modulos">
             <?php
           }
           ?>
       </div>
       <div  class="col-sm-2 col-md-2 col-lg-2">
          <a href="../index.php"><img src="../../assets/img/admin/Cambir_Sucursal.png" alt="Modulo de Inventario" title="CAMBIAR SUCURSAL" class="modulos"></a>
       </div>
       <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
 </div>
   <?php
      $mysqli->close();
      ?>
</body>
</html>
