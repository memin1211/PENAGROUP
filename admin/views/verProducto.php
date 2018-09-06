<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Productos";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Producto.php");
?>
   <body>
      <div class="container Title-Margin">
        <div class="row info-color  text-center" style="border-radius: 10px;">
                <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Productos</label>
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
                                   <th>LABORATORIO</th>
                                   <th>PRESENTACIÓN</th>
                                   <th>CÁNT/UNI</th>
                                   <th>COSTO</th>
                                   <th>P/P</th>
                                   <th>VENCIMIENTO</th>
                                   <th>CATEGORÍA</th>
                                   <th>SUCURSAL</th>
                                </tr>
                             </thead>
                             <tbody>
                               <?php
                                  foreach ($MatrizProducto as $value) {
                                    ?>
                                  <tr>
                                     <td><?php echo $value['Codigo_Barra']; ?></td>
                                     <td><?php  echo $value['Producto']; ?></td>
                                     <td><?php echo $value['Laboratorio']; ?></td>
                                     <td><?php  echo $value['Presentacion']; ?></td>
                                     <td><?php  echo $value['Existencia']; ?></td>
                                     <td><?php  echo $value['Costo_Unidad']; ?></td>
                                     <td><?php  echo $value['Precio_Unidad']; ?></td>
                                     <td><?php  echo $value['Fecha_Vencimiento']; ?></td>
                                     <td><?php  echo $value['Categoria']; ?></td>
                                     <td><?php  echo $value['Nombre_Corto']; ?></td>
                                  </tr>
                               <?php
                                  }
                                ?>
                             </tbody>
                             <tfoot>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>LABORATORIO</th>
                                  <th>PRESENTACIÓN</th>
                                  <th>CÁNT/UNI</th>
                                  <th>COSTO</th>
                                  <th>P/P</th>
                                  <th>VENCIMIENTO</th>
                                  <th>CATEGORÍA</th>
                                  <th>SUCURSAL</th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
                    </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
