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
                     <th>ESTADO</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
               while ($a= mysqli_fetch_assoc($query)){
                 ?>
               <tr>
                  <td><?php echo $a['IdSucursal']; ?></td>
                  <td><?php  echo $a['NombreSucursal']; ?></td>
                  <td><?php echo $a['DireccionSucursal']; ?></td>
                  <td><?php  echo $a['Telefono']; ?></td>
                  <td><?php  echo $a['NombreEstado']; ?></td>
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
                     <th>ESTADO</th>
                  </tr>
               </tfoot>
           </table>
         </div>
      </div>
  </div>
</div>
