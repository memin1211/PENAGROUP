<?php
  date_default_timezone_set('America/El_Salvador');
  include_once("../../db/conexion.php");
  $fechahoy= strftime('%Y/%m/%d');
  $fecha = date("d/m/Y", strtotime($fechahoy));
  $hora = date("g:i:s a");
  $modulo=$_REQUEST['modulo'];
  $Sucursal=$_REQUEST['sucursal'];
  $Id_Sucursal=$_REQUEST['Id_Sucursal'];
  //Consultando Menu del Usuario
  $IdUsuario=$_SESSION['usuario_actual']['Id'];
  $titulo=$mysqli->prepare("SELECT C.Id_Menu_Padre,D.Id,D.Nombre FROM erp_menu_usuario A
    INNER JOIN erp_menu C ON (A.Id_Menu = C.Id AND C.Id_Modulo = ? AND A.Id_Estado=1)
    INNER JOIN erp_menu D ON (C.Id_Menu_Padre = D.Id)
    INNER JOIN erp_usuario G ON (G.Id = A.Id_Usuario) WHERE G.Id = ? AND A.Id_Estado=1 GROUP BY D.Id,D.Nombre ORDER BY Nombre ASC");
  $titulo->bind_param('si',$modulo, $IdUsuario);
  $titulo->execute();
  $resultado1=$titulo->get_result();
?>
<body class="hidden-sn">
    <header>
      <div  id="slide-out" class="side-nav fixed info-color" style="margin-left:-2%;">
        <ul>
          <li>
            <p style=""><i class="fa fa-calendar" aria-hidden="true"> <?= "Fecha: ".$fecha; ?></i></p>
            <p style=""><i class="fa fa-sun-o" aria-hidden="true"> <?= " Hora: ".$hora; ?></i></p>
          </li>
            <li>
                <div class="logo-wrapper">
                    <a href="../views/modulo.php?Id_Sucursal=<?= $Id_Sucursal; ?>&sucursal=<?php echo $Sucursal ?>&v=2" class="nav-link"><img src="../assets/img/logo_modulo.png" style="width: 100%;margin-left:-10%;"/></a>
                </div>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion" style="margin-top: 38%;">
                  <?php
                  while ($a=$resultado1->fetch_assoc()) {
                    $IdPadre=$a['Id_Menu_Padre'];
                    ?>
                    <li><a class="collapsible-header arrow-r"><i class="fa fa-chevron-right"></i><?php echo $a['Nombre'];?><i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                              <?php
                              //Consultando SubMenus
                              $subtitulo=$mysqli->prepare("SELECT A.Id AS MENU_SEC, B.Nombre,B.Url,B.Id_Menu_Padre,B.Id,C.Url as URL FROM erp_menu_usuario A
                              INNER JOIN erp_menu B ON (A.Id_Menu = B.Id)
                              INNER JOIN erp_menu C ON (B.Id_Menu_Padre = C.Id)
                              INNER JOIN erp_usuario F ON (F.Id = A.Id_Usuario) WHERE F.Id = ? AND C.Id_Menu_Padre = ? AND A.Id_Menu<>B.Id_Menu_Padre  AND A.Id_Estado=1 ORDER BY B.Nombre ASC");
                              $subtitulo->bind_param('ss',$IdUsuario,$IdPadre);
                              $subtitulo->execute();
                              $resultado=$subtitulo->get_result();
                              while ($b=$resultado->fetch_assoc()) {
                                ?>
                                <li><a href="<?php echo $b['Url']; ?>?modulo=<?= $modulo; ?>&Id_Sucursal=<?= $Id_Sucursal; ?>&sucursal=<?= $Sucursal; ?>"><?php echo $b['Nombre']; ?></a></li>
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
      </div>
    </header>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script>
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        Ps.initialize(sideNavScrollbar);
    </script>
</body>
</html>
