<div class="tab-pane fade in show active" id="verSucursal" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="row">
           <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>MUNICIPIO</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
               foreach ($MatrizSucursal as $value) {
                 ?>
               <tr>
                  <td><?php echo $value['Id']; ?></td>
                  <td><?php  echo $value['Nombre']; ?></td>
                  <td><?php echo $value['Direccion']; ?></td>
                  <td><?php  echo $value['Telefono']; ?></td>
                  <td><?php  echo $value['Municipio']; ?></td>
               </tr>
           <?php
               }
             ?>
             </tbody>
               <tfoot>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>MUNICIPIO</th>
                  </tr>
               </tfoot>
           </table>
         </div>
      </div>
  </div>
</div>
