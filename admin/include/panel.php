<body class="fixed-sn light-blue-skin">
    <header>
        <nav class="navbar fixed-top blue-gradient navbar-expand-lg scrolling-navbar double-nav">
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <div class="breadcrumb-dn mr-auto">
                <p><?php echo $Sucursal;?></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['actual']['Nombre']?></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../include/salir.php"><i class="fa fa-power-off" aria-hidden="true"></i><span class="clearfix d-none d-sm-inline-block">SALIR</span></a>
                </li>
            </ul>
        </nav>
    </header>
    <script type="text/javascript" src="../../assets/js/compiled.min.js"></script>
</body>