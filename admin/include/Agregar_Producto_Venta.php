<div class="modal fade" id="Agregar_Producto_Venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Agregar Producto a Venta</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <!-- Default form register -->
               <form action="#" method="POST">
                  <div class="row">
                     <div class="col-6">
                        <!-- Default input name -->
                         <label for="NombreProducto" class="grey-text">Producto</label>
                         <input type="text" id="NombreUsuario" name="NombreProducto" class="form-control" style="width:90%;" value="Acetaminofen MK Jbe. 120ml" disabled>
                     </div>
                     <div class="col-6">
                        <!-- Default input name -->
                        <label for="PrecioProducto" class="grey-text">Precio al Público</label>
                        <input type="text" id="PrecioProducto" name="PrecioProducto" class="form-control" style="width:90%;" value="$ 3.75" disabled>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <!-- Default input name -->
                         <label for="NombreProducto" class="grey-text">Componentes</label>
                         <div class="card">
                             <ul class="list-group list-group-flush">
                                 <li class="list-group-item">Acetaminofen 500 mg</li>
                                 <li class="list-group-item">Aqui iria otro componente</li>
                                 <li class="list-group-item">Aqui iran mas componentes</li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-6">
                        <!-- Default input name -->
                        <label for="FechaVencimientoProducto" class="grey-text">Fecha de Vencimiento</label>
                        <input type="text" id="FechaVencimientoProducto" name="FechaVencimientoProducto" class="form-control" style="width:90%;" value="07-2019" disabled>
                     </div>
                  </div>
                   <!-- Default input name -->
                   <label for="DescuentoProducto" class="grey-text">Aplicar Descuento Extra</label>
                   <input type="text" id="DescuentoUsuario" name="DescuentoProducto" class="form-control" style="width:90%;" value="" title="Aplicar Descuento en Enteros: Ejemplo:5=5%, 10=10%, 50=50%">
                 <div class="text-center mt-4">
                     <button class="btn btn-outline-info" type="button">Agregar<i class="fa fa-save ml-2"></i></button>
                 </div>
               </form>
               <!-- Default form register -->
            </div>
         </div>
      </div>
   </div>
