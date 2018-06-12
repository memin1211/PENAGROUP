<div class="tab-pane fade in show active" id="verBitacora" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="row">
           <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                    <th>ID</th>
                     <th>NOMBRE</th>
                     <th>CORREO</th>
                     <th>GENERO</th>
                     <th>ESTADO CIVIL</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                 foreach ($MatrizEmpleado as $value) {
                   ?>
                 <tr>
                    <td><?php  echo $value['Id']; ?></td>
                    <td><?php echo $value['Primer_Nombre'].' '.$value['Segundo_Nombre'].' '.$value['Tercer_Nombre'].' '.$value['Primer_Apellido'].' '.$value['Segundo_Apellido']; ?></td>
                    <th><?php echo $value['Valor']; ?></th>
                    <td><?php  echo $value['Genero']; ?></td>
                    <td><?php echo $value['Nombre']; ?></td>
                 </tr>
               <?php
                   }
                 ?>
               </tbody>
               <tfoot>
                 <tr>
                   <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>GENERO</th>
                    <th>ESTADO CIVIL</th>
                 </tr>
               </tfoot>
           </table>
         </div>
      </div>
  </div>
</div>
