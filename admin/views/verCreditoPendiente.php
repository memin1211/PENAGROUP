<div class="tab-pane fade in show active" id="verCreditoPendiente" role="tabpanel">
   <!--Pagination -->
      <?php include_once("../include/paginador.php"); ?>
    <!--Fin Pagination -->
    <br>
    <div class="card">
      <div class="card-body">
         <div class="row">
            <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>CANTIDAD</th>
                     <th>PRODUCTO</th>
                     <th>PRECIO UNIDAD</th>
                     <th>PRECIO TOTAL</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i=1; $i < 31; $i++) {
                     ?>
                     <tr>
                        <td><?= $i;?></td>
                       <td>Acetaminofen MK Jbe. 120ml</td>
                       <td>$3.75</td>
                       <td>$3.25</td>
                       <td><i class="fa fa-plus puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="<?= $i;?>"></i></td>
                    </tr>
                     <?php
                  }
                  ?>
              </tbody>
               <tfoot>
                  <tr>
                     <th>CANTIDAD</th>
                     <th>PRODUCTO</th>
                     <th>PRECIO UNIDAD</th>
                     <th>PRECIO TOTAL</th>
                     <th></th>
                  </tr>
               </tfoot>
            </table>
         </div>
      </div>
  </div>
</div>
