<div class="tab-pane fade in show active" id="Ver_Catalogo_Venta" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="clearfix">
           <h4 class="float-left">Catálogo de Ventas Generadas</h4>
         </div>
         <div class="row">
            <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>DOCUMENTO</th>
                     <th>CLIENTE</th>
                     <th>FECHA EMISION</th>
                     <th>MONTO VENTA</th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i=1; $i < 101; $i++) {
                     ?>
                     <tr>
                        <td><?= "CCF ".$i; ?></td>
                       <td>Marlene del Carmen Sosa</td>
                       <td>28/05/2018</td>
                       <td>$25.50</td>
                       <td><i class="fa fa-eye puntero" aria-hidden="true" data-toggle="modal" data-target="#Ver_Detalle_Venta" title="<?= $i;?>"></i></td>
                       <td><i class="fa fa-gear puntero" aria-hidden="true" data-toggle="modal" data-target="#Ver_Detalle_Venta" title="<?= $i;?>"></i></td>
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
                     <th>MONTO VENTA</th>
                     <th></th>
                     <th></th>
                  </tr>
               </tfoot>
            </table>
         </div>
      </div>
   </div>
</div>
