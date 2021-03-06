<?php
  session_start();
  if (isset($_SESSION['usuario_actual'])) {
    if ($_SESSION['usuario_actual']['Tipo_Usuario']=="Empleado") {
      header('Location: admin/views/');
    }else{
      header('Location: index.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width initial-scale=1'>
    <meta name='mobile-web-app-capable' content='yes'>
    <link rel="icon" type="image/ico" href="admin/assets/img/logo.png" />
    <title>.::PENAGROUP::.</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="admin/assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="admin/assets/css/style.css" rel="stylesheet" type="txt/css" media="screen"/>
    <!-- Personal-->
    <link href="admin/assets/css/main.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114067464-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114067464-1');
</script>
</head>
<body>
  <div class="row col-lg-12">
    <div class="error">
      <span>Datos Ingresados no válidos, inténtelo de nuevo  por favor</span>
    </div>
  </div>
    <div class="container" style="margin-top:5%;">
      <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-4"></div>
        <div class="col-sm-10 col-md-6 col-lg-4">
           <img src="admin/assets/img/logo.png" style="display:block; margin:auto; width:50%;" class="d-none d-sm-block">
          <form id="formLg">
            <input type="hidden" name="tipousuario" class="form-control" value="Empleado">
            <section class="form-elegant login animated zoomInRight"  class="margen-logo" style="margin-top:10px;">
            <!--Form without header-->
                <div class="card">
                  <div class="text-center card fixed-sn info-color">
                      <h2 class="mb-4 text-white" style="margin-top: 30px;"><strong>Inicio de Sesión</strong></h2>
                  </div>
                    <div class="card-body mx-3">
                        <!--Body-->
                        <div class="md-form">
                            <input type="text" id="Form-email1" name="usuariolg" class="form-control" pattern="[A-Za-z0-9_-]{1,50}" autocomplete="off" required>
                            <label for="Form-email1">Usuario</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass1" name="passlg" class="form-control" pattern="[A-Za-z0-9_-]{1,50}" required>
                            <label for="Form-pass1">Contraseña</label>
                        </div>
                        <div class="text-center mb-3">
                            <input type="submit" class="botonlg info-color" value="Ingresar" >
                        </div>
                    </div>
                </div>
            <!--/Form without header-->
            </section>
          </form>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-4"></div>
      </div>

    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="admin/assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="admin/assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="admin/assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="admin/assets/js/mdb.min.js"></script>
    <!-- Personal-->
    <script type="text/javascript" src="admin/assets/js/style.js"></script>
    <script type="text/javascript" src="admin/assets/js/main.js"></script>
</body>

</html>
