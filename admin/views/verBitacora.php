<div class="tab-pane fade in show active" id="verBitacora" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="row">
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
                    <td><?php echo $value['Primer_Nombre'].' '.$value['Primer_Apellido']; ?></td>
                    <td><?php  echo $value['Descripcion']; ?></td>
                    <td><?php echo $value['Hora_Registro']; ?></td>
                    <td><?php  echo $value['Fecha_Registro']; ?></td>
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
  </div>
</div>
