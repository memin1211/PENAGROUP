<?php
  date_default_timezone_set('America/El_Salvador');
  include_once("../../db/conexion.php");
  $fechahoy= strftime('%Y/%m/%d');
  $fecha = date("d/m/Y", strtotime($fechahoy));
  $hora = date("g:i:s a");
  $modulo=$_REQUEST['modulo'];
  $Sucursal=$_REQUEST['sucursal'];
  //Consultando Menu del Usuario
  $IdUsuario=$_SESSION['usuario_actual']['Id'];
  $titulo=$mysqli->prepare("SELECT C.Id_Menu_Padre,D.Id,D.Nombre FROM erp_acceso A INNER JOIN erp_menu C ON (A.Id_Menu = C.Id AND C.Id_Modulo = ? AND C.Id_Estado=1)
INNER JOIN erp_menu D ON (C.Id_Menu_Padre = D.Id AND D.Id_Estado=1) INNER JOIN erp_rol E ON (E.Id = A.Id_Rol) INNER JOIN erp_rol_usuario F ON (F.Id_Rol = E.Id)
INNER JOIN erp_usuario G ON (G.Id_Usuario = F.Id_Usuario) WHERE G.Id = 1 GROUP BY D.Id,D.Nombre ORDER BY Nombre ASC");
  $titulo->bind_param('s',$modulo);
  $titulo->execute();
  $resultado1=$titulo->get_result();
?>
<body>
    <header class="hidden-sn">
        <ul id="slide-out" class="side-nav fixed  custom-scrollbar info-color">
          <li style="margin-top: 5px; margin-left: 10px;">
            <p style=""><i class="fa fa-calendar" aria-hidden="true"> <?= "Fecha: ".$fecha; ?></i></p>
            <p style=""><i class="fa fa-sun-o" aria-hidden="true"> <?= " Hora: ".$hora; ?></i></p>
          </li>
            <li>
                <div class="logo-wrapper">
                    <a href="../views/modulo.php?sucursal=<?php echo $Sucursal ?>&v=2" class="nav-link"><img src="../assets/img/logo_modulo.png" style="width: 100%;"/></a>
                </div>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion" style="margin-top: 35%;">
                  <?php
                  while ($a=$resultado1->fetch_assoc()) {
                    $IdPadre=$a['Id_Menu_Padre'];
                    ?>
                    <li><a class="collapsible-header arrow-r"><i class="fa fa-chevron-right"></i><?php echo $a['Nombre'];?><i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                              <?php
                              //Consultando SubMenus
                              $subtitulo=$mysqli->prepare("SELECT A.Id AS MENU_SEC, B.Nombre,B.Url,B.Id_Menu_Padre,B.Id,C.Url as URL FROM erp_acceso A INNER JOIN erp_menu B ON (A.Id_Menu = B.Id AND B.Id_Estado=1)
                              INNER JOIN erp_menu C ON (B.Id_Menu_Padre = C.Id AND C.Id_Estado=1) INNER JOIN erp_rol D ON (D.Id = A.Id_Rol) INNER JOIN erp_rol_usuario E ON (E.Id_Rol = D.Id)
                              INNER JOIN erp_usuario F ON (F.Id = E.Id_Usuario)WHERE F.Id = ? AND C.Id_Menu_Padre = ? AND A.Id_Menu<>B.Id_Menu_Padre ORDER BY B.Nombre ASC");
                              $subtitulo->bind_param('ss',$IdUsuario,$IdPadre);
                              $subtitulo->execute();
                              $resultado=$subtitulo->get_result();
                              while ($b=$resultado->fetch_assoc()) {
                                ?>
                                <li><a href="<?php echo $b['Url']; ?>?modulo=<?= $modulo; ?>&sucursal=<?= $Sucursal; ?>"><?php echo $b['Nombre']; ?></a></li>
                                <?php
                              }
                              ?>
                            </ul>
                        </div>
                    </li>
                    <?php
                  }
                  ?>

                </ul>
            </li>

        </ul>
    </header>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
</body>
</html>
