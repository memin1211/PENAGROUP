<?php
$Cod_Accion=isset($_REQUEST['Cod_Accion']) ? $_REQUEST['Cod_Accion']:NULL;
$BuscarId=isset($_REQUEST['IdUsuario']) ? $_REQUEST['IdUsuario']:NULL;
?>
<head>
   <style media="screen">
   .grid-container {
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-template-rows: 50px 225px;
      grid-gap: 10px;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
      }
      .grid-container > div {
      background-color: #33b5e5;
      text-align: center;
      padding: 20px 0;
      font-size: 15px;
      }
      option:hover{
         background-color: skyblue;
      }
   </style>
</head>
<body>
   <div class="container-fluid">
      <?php if ($Cod_Accion==1) {
         ?>
         <div class="row col">
            <div style="position: absolute; width: 100%;">
               <div>
                  <h3 style="font: italic bold 12px/30px Georgia, serif;; text-align: center; color: #33b5e5; font-size: 1.5rem;">Gestionar Permisos</h3>
               </div>
               <div style="margin-top:1%;">
                  <!-- Tab panels -->
                      <div class="row card Card-Bottom" style="width:95%; margin-left:1%;">
                        <!-- Default form register -->
                          <form action="#" method="POST">
                            <div class="row col">
                              <!-- Default input name -->
                               <label for="NombreUsuario" class="grey-text">Usuario</label>
                               <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control" style="width:90%;" value="MIGUEL PEÑA" disabled>
                            </div>

                            <div class="grid-container">
                                <div style="color:white; text-transform: uppercase;">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Mod_Administracion" id="Modulos1">
                                        <label class="form-check-label" for="Modulos1">
                                             Administración
                                        </label>
                                     </div>
                                </div>
                                <div style="color:white; text-transform: uppercase;">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Mod_Punto_Venta" id="Modulos2">
                                        <label class="form-check-label" for="Modulos2">
                                             Punto de Venta
                                        </label>
                                     </div>
                                </div>
                                <div style="color:white; text-transform: uppercase;">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Mod_Inventario" id="Modulos3">
                                        <label class="form-check-label" for="Modulos3">
                                             Inventario
                                        </label>
                                     </div>
                                </div>
                                <div style="color:white; text-transform: uppercase;">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Mod_Contabilidad" id="Modulos4" disabled>
                                        <label class="form-check-label" for="Modulos4">
                                             Contabilidad
                                        </label>
                                     </div>
                                </div>
                                <div>
                                   <!-- Seleccionador de Permisos-->
                                     <select id="Select_Modulo0" name="Select_Mod_Administracion" multiple style="width:100%; height:100%;" >
                                          <option value="" disabled selected>Opciones de Menú</option>
                                          <option value="1">CLIENTE</option>
                                          <option value="2">Gestionar Clientes</option>
                                          <option value="3">EMPLEADO</option>
                                          <option value="4">Gestionar Empleados</option>
                                          <option value="5">SUCURSAL</option>
                                          <option value="6">Gestionar Sucursales</option>
                                          <option value="7">USUARIOS</option>
                                          <option value="8">Gestionar Usuarios</option>
                                      </select>
                                      <label style="color:white; text-transform: uppercase;">Administracion</label>
                                      <!-- Fin Seleccionador de Permisos-->
                                </div>
                                <div>
                                   <!-- Seleccionador de Permisos-->
                                     <select id="Select_Modulo1" name="Select_Mod_Punto_Venta" multiple style="width:100%; height:100%;" >
                                          <option value="" disabled selected>Opciones de Menú</option>
                                          <option value="1">COBROS</option>
                                          <option value="2">Gestionar Cobros</option>
                                          <option value="3">FACTURACION</option>
                                          <option value="4">Facturar</option>
                                          <option value="5">Gestionar Facturas</option>
                                          <option value="6">PEDIDOS</option>
                                          <option value="7">Gestionar Pedidos</option>
                                      </select>
                                      <label style="color:white; text-transform: uppercase;">Punto de Venta</label>
                                      <!-- Fin Seleccionador de Permisos-->
                                </div>
                                <div>
                                   <!-- Seleccionador de Permisos-->
                                     <select id="Select_Modulo2" name="Select_Mod_Inventario" multiple style="width:100%; height:100%;" >
                                          <option value="" disabled selected>Opciones de Menú</option>
                                          <option value="1">BODEGA</option>
                                          <option value="2">Gestionar Bodega</option>
                                          <option value="3">DISTRIBUIDORES</option>
                                          <option value="4">Gestionar Laboratorios</option>
                                          <option value="5">Gestionar Proveedor</option>
                                          <option value="6">INVENTARIO</option>
                                          <option value="7">Gestionar Ordenes</option>
                                          <option value="8">Gestionar Productos</option>
                                      </select>
                                      <label style="color:white; text-transform: uppercase;">Inventario</label>
                                      <!-- Fin Seleccionador de Permisos-->
                                </div>
                                <div>
                                   <!-- Seleccionador de Permisos-->
                                     <select id="Select_Modulo3" name="Select_Mod_Contabilidad" multiple style="width:100%; height:100%;" disabled>
                                          <option value="" disabled selected>Opciones de Menú</option>

                                      </select>
                                      <label style="color:white; text-transform: uppercase;">Contabilidad</label>
                                      <!-- Fin Seleccionador de Permisos-->
                                </div>
                              </div>

                            <div>
                                <button type="button" style="align-text:center; border-radius:15px; font-size: 15px; background-color:#33b5e5; color:white; width:25%; margin-left:40%;">Guardar</button>
                            </div>
                          </form>
                          <!-- Default form register -->
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
