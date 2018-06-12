<body class="fixed-sn light-blue-skin" >
    <header>
        <nav class="navbar fixed-top info-color navbar-expand-lg scrolling-navbar double-nav">
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <div class="breadcrumb-dn mr-auto">
                <p><?php echo $Sucursal;?></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto" style="margin-bottom: -20px;">
                <li class="nav-item">
                    <a class="nav-link"><span class="clearfix d-none d-sm-inline-block chip info-color  text-white"><img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg"><?php echo $_SESSION['usuario_actual']['Primer_Nombre'].' '.$_SESSION['usuario_actual']['Primer_Apellido']?></span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="../include/salir.php"><span class="clearfix d-sm-inline-block chip info-color  text-white"><i class="fa fa-power-off" aria-hidden="true"></i>SALIR</span></a>
                </li>
            </ul>
        </nav>
    </header>
    <script type="text/javascript" src="../assets/js/compiled.min.js"></script>
</body>
