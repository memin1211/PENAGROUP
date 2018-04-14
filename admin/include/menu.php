<?php
  include_once("../../db/conexion.php");
  $modulo=$_REQUEST['modulo'];
  $Sucursal=$_REQUEST['sucursal'];
  //Consultando Menu del Usuario
  $IdUsuario=$_SESSION['actual']['IdUsuario'];
  $titulo=$mysqli->prepare("SELECT C.IdPadre,D.IdMenu,D.Detalle,D.Url as URL FROM menusuario A INNER JOIN usuario B ON (A.IdUsuario = B.IdUsuario) INNER JOIN menu C ON (A.IdMenu = C.IdMenu AND C.IdEstado = 'E1' AND IdModulo = ?) INNER JOIN menu D ON (C.IdPadre = D.IdMenu AND D.IdEstado = 'E1') WHERE A.IdUsuario = '1' GROUP BY D.IdMenu,D.Detalle ORDER BY Detalle ASC");
  $titulo->bind_param('s',$modulo);
  $titulo->execute();
  $resultado1=$titulo->get_result();
?>
<body >
    <header class="fixed-sn info-color">
        <ul id="slide-out" class="side-nav fixed  custom-scrollbar info-color">
            <li>
                <div class="logo-wrapper info-color">
                    <a href="index.php?sucursal=<?php echo $Sucursal ?>" class="nav-link"><h2 class="img-fluid flex-center">MODULOS</h2></a>
                </div>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                  <?php
                  while ($a=$resultado1->fetch_assoc()) {
                    $IdPadre=$a['IdPadre'];
                    ?>
                    <li><a class="collapsible-header info-color arrow-r"><i class="fa fa-chevron-right"></i><?php echo $a['Detalle'];?><i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body info-color">
                            <ul>
                              <?php
                              //Consultando SubMenus
                              $subtitulo=$mysqli->prepare("SELECT A.IdMenu AS MENU_SEC, C.Detalle,C.Url,C.IdPadre,C.IdMenu,D.Url as URL FROM menusuario A INNER JOIN usuario B ON (A.IdUsuario = B.IdUsuario) INNER JOIN menu C ON (A.IdMenu = C.IdMenu AND C.IdEstado = 'E1') INNER JOIN menu D ON (C.IdPadre = D.IdMenu AND D.IdEstado = 'E1') WHERE A.IdUsuario = ? AND C.IdPadre = ? AND A.IdEstado = 'E1' AND A.IdMenu<>D.IdPadre ORDER BY C.Detalle ASC");
                              $subtitulo->bind_param('ss',$IdUsuario,$IdPadre);
                              $subtitulo->execute();
                              $resultado=$subtitulo->get_result();
                              while ($b=$resultado->fetch_assoc()) {
                                ?>
                                <li><a href="<?php echo $b['Url'].'?modulo='.$modulo ?>&sucursal=<?php echo $Sucursal ?>" class="info-color"><?php echo $b['Detalle']; ?></a></li>
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
