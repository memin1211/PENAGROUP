<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Clientes";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Cliente.php");
?>
   <body>
     <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Clientes</label>
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
                                   <th>NRC</th>
                                   <th>TIPO CLIENTE</th>
                                   <th>CUENTA</th>
                                   <th>ESTADO</th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php
                                   foreach ($MatrizCliente as $value) {
                                     ?>
                                   <tr>
                                      <td><?= $value['Id']; ?></td>
                                      <td><?= $value['Primer_Nombre'].' '.$value['Segundo_Nombre'].' '.$value['Primer_Apellido'].' '.$value['Segundo_Apellido']; ?></td>
                                      <td><?= $value['Direccion']; ?></td>
                                      <td><?= $value['Nrc']; ?></td>
                                      <td><?= $value['Nombre']; ?></td>
                                      <td><?= $value['Codigo_Cuenta']; ?></td>
                                      <td><?= $value['Estado']; ?></td>
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
                                  <th>NRC</th>
                                  <th>TIPO CLIENTE</th>
                                  <th>CUENTA</th>
                                  <th>ESTADO</th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
              </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
