<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    $Sucursal=$_REQUEST['sucursal'];
    include_once("../include/panel.php");
    include_once("../include/menu.php");
  }else {
    header('Location: ../');
  }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>.::PENAGROUP::.</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="../assets/css/compiled.min.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
      <link rel="icon" type="image/ico" href="../assets/img/logo.png" />
      <style media="screen">
        a{
         color: white;
        }
        a:hover{
         color: white;
        }
      </style>
   </head>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified blue-gradient" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-cart-plus" aria-hidden="true"></i> Generar Venta</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                  <!-- Material form contact -->
                   <form>
                       <p class="h4 text-center mb-4">Facturación</p>

                       <div class="row">
                         <div class="col-12">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                               <input type="text" id="NombreCliente" name="NombreCliente" class="form-control" required>
                               <label for="NombreCliente">Nombre Cliente</label>
                           </div>
                         </div>
                        </div>

                      <div class="row">
                        <div class="col-6">
                          <select class="mdb-select colorful-select dropdown-info">
                              <option value="" disabled selected>Seleccione</option>
                              <option value="1">Ticket</option>
                              <option value="2">Factura</option>
                              <option value="3">CCF</option>
                          </select>
                          <label>Tipo Documento</label>
                        </div>
                        <div class="col-6">
                          <select class="mdb-select colorful-select dropdown-info">
                              <option value="" disabled selected>Seleccione</option>
                              <option value="1">Efectivo</option>
                              <option value="2">Cheque</option>
                              <option value="3">Transferemcia</option>
                          </select>
                          <label>Forma Pago</label>
                        </div>
                      </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="button">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
                </div>
                <!--/.Panel 1-->
            </div>
         </div>
      </div>
<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').material_select();
});
</script>
   </body>
</html>
