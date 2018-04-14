<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>.::PENAGROUP::.</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/compiled.min.css" rel="stylesheet">
</head>
<body class="fixed-sn light-blue-skin">
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar ">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <h2 class="img-fluid flex-center">PENAGROUP</h2>
                </div>
            </li>
            <!--/. Logo -->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>OPCION1<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">OPCION1.1</a>
                                </li>
                                <li><a href="#" class="waves-effect">OPCION1.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i>OPCION2<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">OPCION2.1</a>
                                </li>
                                <li><a href="#" class="waves-effect">OPCION2.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i>OPCION3<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">OPCION3.1</a>
                                </li>
                                <li><a href="#" class="waves-effect">OPCION3.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i>OPCION4<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">OPCION4.1</a>
                                </li>
                                <li><a href="#" class="waves-effect">OPCION4.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>USUARIO</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['actual']['Nombre']?></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SESSION
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">PERFIL</a>
                        <a class="dropdown-item" href="../../include/salir.php">SALIR</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../../assets/js/compiled.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
</body>
</html>
