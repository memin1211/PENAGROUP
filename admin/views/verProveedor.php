<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Proveedores";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Proveedor.php");
?>
   <body>
      <div class="container Title-Margin">
        <div class="row info-color  text-center" style="border-radius: 10px;">
                <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Proveedores</label>
        </div>
      </div>
         <div class="container">
             <!-- Tab panels -->
                        <div class="row Card-Bottom">
                         <table id="example" class="display" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>CÓDIGO</th>
                                   <th>NOMBRE</th>
                                   <th>DIRECCIÓN</th>
                                   <th>TELÉFONO</th>
                                   <th>MUNICIPIO</th>
                                   <th>CUENTA</th>
                                   <th>ESTADO</th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php
                                  foreach ($MatrizProveedor as $value) {
                                    ?>
                                  <tr>
                                     <td width="10%"><?= $value['Id']; ?></td>
                                     <td width="25%"><?= $value['Nombre']; ?></td>
                                     <td width="25%"><?= $value['Direccion']; ?></td>
                                     <td width="10%"><?= $value['Telefono_Fijo']; ?></td>
                                     <td width="10%"><?= $value['Municipio']; ?></td>
                                     <td width="10%"><?= $value['Codigo_Cuenta']; ?></td>
                                     <td width="10%"><?= $value['Estado']; ?></td>
                                  </tr>
                               <?php
                                  }
                                ?>
                             </tbody>
                             <tfoot>
                                <tr>
                                   <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>DIRECCIÓN</th>
                                  <th>TELÉFONO</th>
                                  <th>MUNICIPIO</th>
                                  <th>CUENTA</th>
                                  <th>ESTADO</th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
                    </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionProveedor.js"></script>
   </body>
</html>
