<div class="tab-pane fade in show active" id="verCliente" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="clearfix">
           <h4 class="float-left">Catálogo de Producto</h4>
           <button class="btn info-color float-right" type="button" aria-hidden="true" data-toggle="modal" data-target="#InformacionCliente">Completar Venta<i class="fa fa-plus ml-2"></i></button>
         </div>
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
                       <td><i class="fa fa-plus puntero" aria-hidden="true" data-toggle="modal" data-target="#Agregar_Producto_Venta" title="<?= $i;?>"></i></td>
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
         <hr>

         <div class="clearfix">
            <div class="float-left">
               <h5>Montos a Pagar</h5>
            </div>
            <div class="float-rigth">
               <button class="btn info-color float-right" type="button" aria-hidden="true" data-toggle="modal" data-target="#Ver_Detalle_Venta">Ver Detalle de Venta<i class="fa fa-eyes ml-2"></i></button>
            </div>
         </div>

         <div class="row col-4">
            <div class="row col-12" >
               <div class="col-8">
                  <h6>Sub-Total:</h6>
               </div>
               <div class="col-4">
                  <h6>$100.00</h6>
               </div>
            </div>
            <div class="row col-12">
               <div class="col-8">
                  <h6>IVA:</h6>
               </div>
               <div class="col-4">
                  <h6>$13.00</h6>
               </div>
            </div>
            <div class="row col-12">
               <div class="col-8">
                  <h6><b>Total:</b></h6>
               </div>
               <div class="col-4">
                  <h6><b>$113.00</b></h6>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
