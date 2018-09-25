<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Bitácora";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Bitacora.php");
?>
<body>
  <div class="container Title-Margin">
    <div class="row info-color  text-center" style="border-radius: 10px;">
            <label class="h3 font-italic white-text" style="margin-left:15px;">Bitácora</label>
    </div>
  </div>
     <div class="container">
         <!-- Tab panels -->
                    <div class="row Card-Bottom">
                      <table id="example" class="display" cellspacing="0" width="100%">
                          <thead>
                             <tr>
                                <th>USUARIO</th>
                                <th>ACCIÓN</th>
                                <th>HORA</th>
                                <th>FECHA</th>
                             </tr>
                          </thead>
                          <tbody>
                             <?php
                            foreach ($MatrizBitacora as $value) {
                              ?>
                            <tr>
                               <td><?= $value['Primer_Nombre'].' '.$value['Primer_Apellido']; ?></td>
                               <td><?= $value['Descripcion']; ?></td>
                               <td><?= date('h:i:s A', strtotime($value['Hora_Registro'])); ?></td>
                               <td><?= date('d-m-Y', strtotime($value['Fecha_Registro'])); ?></td>
                            </tr>
                          <?php
                              }
                            ?>
                          </tbody>
                          <tfoot>
                            <tr>
                               <th>USUARIO</th>
                               <th>ACCIÓN</th>
                               <th>HORA</th>
                               <th>FECHA</th>
                            </tr>
                          </tfoot>
                      </table>
                    </div>
                 </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
