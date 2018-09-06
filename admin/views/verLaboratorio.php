<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Laboratorios";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Laboratorio.php");
?>
   <body>
      <div class="container Title-Margin">
        <div class="row info-color  text-center" style="border-radius: 10px;">
                <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Laboratorios</label>
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
                                   <th>NOMBRE LEGAL</th>
                                   <th>ABREVIATURA</th>
                                   <th>ESTADO</th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php
                                   foreach ($MatrizLaboratorio as $value) {
                                     ?>
                                   <tr>
                                      <td><?php echo $value['Id']; ?></td>
                                      <td><?php  echo $value['Nombre']; ?></td>
                                      <td><?php echo $value['Nombre_Legal']; ?></td>
                                      <td><?php  echo $value['Abreviatura']; ?></td>
                                      <td><?php  echo $value['Estado']; ?></td>
                                   </tr>
                                <?php
                                   }
                                 ?>
                             </tbody>
                             <tfoot>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>NOMBRE LEGAL</th>
                                  <th>ABREVIATURA</th>
                                  <th>ESTADO</th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
                    </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
