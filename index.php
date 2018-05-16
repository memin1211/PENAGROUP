<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']!="USUARIO") {
      header('Location: usuario/views/');
    }elseif ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: usuario/views/');
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width initial-scale=1'>
    <meta name='mobile-web-app-capable' content='yes'>
    <link rel="icon" type="image/ico" href="usuario/assets/img/logo.png" />
    <title>.::PENAGROUP::.</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="usuario/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="usuario/assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="usuario/assets/css/style.css" rel="stylesheet">
    <!-- Personal-->
    <link href="usuario/assets/css/main.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
    <div class="container-fluid">
      <!--Navbar-->
         <nav class="navbar navbar-expand-lg navbar-dark primary-color">

             <!-- Navbar brand -->
             <a class="navbar-brand" href="index.php">VENTA DE MEDICINA POPULAR Y MÁS</a>

             <!-- Collapse button -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <!-- Collapsible content -->
             <div class="collapse navbar-collapse" id="basicExampleNav">

                 <!-- Links -->
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="#">Inicio
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Promociones</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Quienes Somos</a>
                     </li>

                 </ul>
                 <!-- Links -->

                     <div class="md-form my-0">
                         <i class="fa fa-group" aria-hidden="true" data-toggle="modal" data-target="#Registrarse" title="Registrarse"> Registrarse</i>
                         <i class="fa fa-user" aria-hidden="true" data-toggle="modal" data-target="#InicioSesion" title="InicioSesion"> Iniciar Sesión</i>
                     </div>
             </div>
             <!-- Collapsible content -->

             <!-- Inicio del Login y Registro-->
             <?php
               require_once("usuario/include/registrarse.php");
               require_once("usuario/include/inicio_sesion.php");
            ?>
            <!-- Fin del Login y Registro-->

         </nav>
         <!--/.Navbar-->

         <div class="container" style="margin-top: 2%;">
            <!--Carousel Wrapper-->
               <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%;">
                   <!--Indicators-->
                   <ol class="carousel-indicators">
                       <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                       <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                   </ol>
                   <!--/.Indicators-->
                   <!--Slides-->
                   <div class="carousel-inner" role="listbox">
                       <!--First slide-->
                       <div class="carousel-item active">
                           <img class="d-block w-100" src="usuario/assets/img/1.png" alt="First slide">
                       </div>
                       <!--/First slide-->
                       <!--Second slide-->
                       <div class="carousel-item">
                           <img class="d-block w-100" src="usuario/assets/img/2.png" alt="Second slide">
                       </div>
                       <!--/Second slide-->
                       <!--Third slide-->
                       <div class="carousel-item">
                           <img class="d-block w-100" src="usuario/assets/img/3.png" alt="Third slide">
                       </div>
                       <!--/Third slide-->
                   </div>
                   <!--/.Slides-->
                   <!--Controls-->
                   <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="sr-only">Anterior</span>
                   </a>
                   <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Siguiente</span>
                   </a>
                   <!--/.Controls-->
               </div>
               <!--/.Carousel Wrapper-->
         </div>

         <!--Footer-->
            <footer class="page-footer font-small unique-color-dark pt-0">

                <div style="background-color: #6351ce;">
                    <div class="container">
                        <!--Grid row-->
                        <div class="row py-4 d-flex align-items-center">

                            <!--Grid column-->
                            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                <h6 class="mb-0 white-text">Conectáte con Nosotros en Redes Sociales</h6>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <!--Facebook-->
                                <a class="fb-ic ml-0">
                                    <i class="fa fa-facebook white-text mr-lg-4"> </i>
                                </a>
                                <!--Twitter-->
                                <a class="tw-ic">
                                    <i class="fa fa-twitter white-text mr-lg-4"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic">
                                    <i class="fa fa-instagram white-text mr-lg-4"> </i>
                                </a>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                    </div>
                </div>

                <!--Footer Links-->
                <div class="container mt-5 mb-4 text-center text-md-left">
                    <div class="row mt-3">

                        <!--First column-->
                        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>PEÑA GROUP</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>Organización que cuenta con más de 25 años de experiencia en el campo de la medicina...</p>
                        </div>
                        <!--/.First column-->

                        <!--Second column-->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Categorias</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a href="#!">Tópicos</a>
                            </p>
                            <p>
                                <a href="#!">Cremas</a>
                            </p>
                            <p>
                                <a href="#!">Jarabes</a>
                            </p>
                            <p>
                                <a href="#!">Otros...</a>
                            </p>
                        </div>
                        <!--/.Second column-->

                        <!--Third column-->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Sucursales</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a href="#!">Santa Maria</a>
                            </p>
                            <p>
                                <a href="#!">Sagrada Familia</a>
                            </p>
                        </div>
                        <!--/.Third column-->

                        <!--Fourth column-->
                        <div class="col-md-4 col-lg-3 col-xl-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Contácto</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <i class="fa fa-envelope mr-3"></i> ventas@dominio.com</p>
                            <p>
                                <i class="fa fa-phone mr-3"></i> + 503 2235 5567</p>
                            <p>
                                <i class="fa fa-print mr-3"></i> + 503 2504 3494</p>
                        </div>
                        <!--/.Fourth column-->

                    </div>
                </div>
                <!--/.Footer Links-->

                <!-- Copyright-->
                <div class="footer-copyright py-3 text-center">
                    © 2018 Copyright:
                        <strong>ASI1-G01-E01</strong>
                </div>
                <!--/.Copyright -->

            </footer>
            <!--/.Footer-->
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="usuario/assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="usuario/assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="usuario/assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="usuario/assets/js/mdb.min.js"></script>
    <!-- Personal-->
    <script type="text/javascript" src="usuario/assets/js/style.js"></script>
    <script type="text/javascript" src="usuario/assets/js/main.js"></script>
</body>

</html>
