<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Modificar Sucursal";
require_once("../include/bitacora.php");
$Cod_Accion=isset($_REQUEST['Cod_Accion']) ? $_REQUEST['Cod_Accion']:NULL;
$BuscarId=isset($_REQUEST['IdSucursal']) ? $_REQUEST['IdSucursal']:NULL;
?>
<body>
   <div class="container-fluid">
      <?php if ($Cod_Accion==1) {
         include_once("../controllers/controllers_Sucursal.php");
         if ($BuscarId!='') {
         $ResultadoBusqueda=$Sucursal->get_BuscarSucursal($BuscarId);
         }
         ?>
         <div class="row col">
            <div style="position: absolute; width: 100%;">
               <div class="card info-color" style="margin-top:1%;">
                  <h5 class="text-center font-italic white-text">Modificar Sucursal</h5>
               </div>
               <div style="margin-top:1%;">
                  <!-- Tab panels -->
                      <div class="row card Card-Bottom" style="width:98%; margin-left:1%;">
                       <!-- Material form contact -->
                        <form action="../controllers/controllers_Sucursal.php" method="POST" id="FormModificarSucursal" name="FormModificarSucursal">
                          <?php foreach ($ResultadoBusqueda as $rs){ ?>
                             <input type="hidden" name="Formulario" value="Modificar">
                            <input type="hidden" name="IdSucursal" value="<?= $BuscarId; ?>">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-institution prefix grey-text" style="margin-left:1%;"></i>
                                  <input type="text" id="NombreSucursal" name="NombreSucursal" value="<?= $rs['Nombre']; ?>" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ ,.áÁéÉíÍóÓúÚ]{1,50}" title="Solo Letras" autocomplete="off" required>
                              </div>

                              <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class="fa fa-institution prefix grey-text" style="margin-left:1%;"></i>
                                        <input type="text" id="NombreCortoSucursal" name="NombreCortoSucursal" value="<?= $rs['Nombre_Corto']; ?>" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ áÁéÉíÍóÓúÚ,.]{1,50}" title="Solo Letras" autocomplete="off" required>

                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class="fa fa-phone prefix grey-text" style="margin-left:1%;"></i>
                                        <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" value="<?= $rs['Telefono']; ?>" style="width:75%;" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                                    </div>
                                 </div>
                              </div>

                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-address-card prefix grey-text" style="margin-left:1%;"></i>
                                  <input type="text" id="DireccionSucursal" name="DireccionSucursal" value="<?= $rs['Direccion']; ?>" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" autocomplete="off" required>
                              </div>
                          <?php }?>

                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-image prefix grey-text" style="margin-left:1%;"></i>
                                <input type="file" id="Logo" name="Logo" style="width:75%;" class="form-control" disabled>
                            </div>

                            <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opción. Obligatorio" id="ModificarGeneroCliente" name="ModificarGeneroCliente" required>
                                <option value="" disabled selected>Seleccione</option>
                                <option value="1">COMÚN</option>
                                <option value="2">PREFERENTE</option>
                            </select>
                            <label>Género</label>

                            <div class="text-center mt-4">
                                <button class="btn btn-outline-info botonlg" type="submit">Modificar<i class="fa fa-refresh ml-2"></i></button>
                            </div>
                        </form>
                        <!-- Material form contact -->
                   </div>
               </div>
            </div>
         </div>
         <?php
      }elseif ($Cod_Accion==2) {
         ?>
         <div style="position: absolute; top: 0%; botton: 0px; left: 0px; width: 100%;">
           <table width="100%" height="100%" align="center">
         	<tr>
         	<td align="center"><img src="https://mdbootstrap.com/img/Photos/Others/gradient1.jpg" height="400px" width="100%">
               <font face='comic' class="text-info" size='15' ><strong>¡Sucursal Creada Exitosamente!</strong></font>
            </td>
         	</tr>
            </table>
         </div>
         <?php
         echo "<script language=\"javascript\">setTimeout ('parent.$.facebox.close()', 3000); setTimeout('parent.location.reload()',3000);</script>";
      }
      elseif ($Cod_Accion==3) {
         ?>
         <div style="position: absolute; top: 0%; botton: 0px; left: 0px; width: 100%;">
           <table width="100%" height="100%" align="center">
         	<tr>
         	<td align="center"><img src="https://mdbootstrap.com/img/Photos/Others/gradient1.jpg" height="400px" width="100%">
               <font face='comic' class="text-info" size='15' ><strong>¡UPS! Hubo un Error...</strong></font>
            </td>
         	</tr>
            </table>
         </div>
         <?php
         echo "<script language=\"javascript\">setTimeout ('parent.$.facebox.close()', 3000); setTimeout('parent.location.reload()',3000);</script>";
      }
      ?>
   </div>
   <!-- JQuery -->
   <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="../assets/js/popper.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
