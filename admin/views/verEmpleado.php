<div class="tab-pane fade in show active" id="verEmpleado" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="row">
           <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>DUI</th>
                     <th>CORREO</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i=1; $i < 31; $i++) {
                     ?>
                     <tr>
                        <td><?= $i;?></td>
                       <td>ALLAN BRITO</td>
                       <td>12345678-9</td>
                       <td>ALGUIEN@DOMINIO.COM</td>
                       <td><i class="fa fa-plus puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="<?= $i;?>"></i></td>
                    </tr>
                     <?php
                  }
                  ?>
             </tbody>
               <tfoot>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>DUI</th>
                     <th>CORREO</th>
                     <th></th>
                  </tr>
               </tfoot>
           </table>
         </div>
      </div>
  </div>
</div>
