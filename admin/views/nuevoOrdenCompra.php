<div class="tab-pane fade" id="nuevoOrdenCompra" role="tabpanel">
    <!-- Material form contact -->
     <form>
         <p class="h4 text-center mb-4">Generar Orden de Compra</p>

         <div class="row">
           <div class="col-6">
             <!-- Material input text -->
             <div class="md-form">
               <i class="fa fa-user prefix grey-text"></i>
                 <input type="text" id="SolicitanteOrdenCompra" name="SolicitanteOrdenCompra" class="form-control" value="MARIA DEL CARMEN AMAYA" style="width:80%;" disabled>
                 <label for="SolicitanteOrdenCompra">Solicitante</label>
             </div>
           </div>
           <div class="col-6">
             <!-- Material input datepicker -->
             <div class="md-form">
               <i class="fa fa-calendar prefix grey-text"></i>
                  <input placeholder="Seleccione Fecha de Orden de Compra" name="FechaOrdenServicio" id="FechaOrdenServicio" type="text" id="date-picker-example" class="form-control datepicker" style="width:80%; background: white;" required>
                  <label for="date-picker-example">Fecha de Orden de Compra</label>
             </div>
           </div>
         </div>
         <hr>
         <div class="row">
           <div class="col-9">
             <!-- Material input text -->
             <div class="md-form">
               <i class="fa fa-search prefix grey-text"></i>
                 <input type="text" id="Buscador" name="Buscador" class="form-control" value="" style="width:95%;">
                 <label for="Buscador">Buscar Producto</label>
             </div>
           </div>
           <div class="col-3">
             <div class="text-center mt-4">
                 <button class="btn btn-outline-info" type="button">Agregar Producto<i class="fa fa-paper-plane-o ml-2"></i></button>
             </div>
           </div>
         </div>
         <!--Table-->
         <table class="table table-hover table-responsive-md table-fixed">
             <!--Table head-->
             <thead class="special-color white-text">
                 <tr>
                     <th>CANTIDAD</th>
                     <th>PRODUCTO</th>
                     <th>LABORATORIO</th>
                     <th>PRESENTACIÓN</th>
                 </tr>
             </thead>
             <!--Table head-->

             <!--Table body-->
             <tbody>
                 <tr>
                     <th scope="row">1000</th>
                     <td>ACETAMINOFEN</td>
                     <td>MK</td>
                     <td>TABLETA</td>
                 </tr>
                 <tr>
                   <th scope="row">10</th>
                   <td>ACETAMINOFEN 120 ml</td>
                   <td>MK</td>
                   <td>JARABE</td>
                 </tr>
                 <tr>
                   <th scope="row">1500</th>
                   <td>RANITIDINA 150</td>
                   <td>SAIMED</td>
                   <td>CAPSULA</td>
                 </tr>
                 <tr>
                   <th scope="row">1200</th>
                   <td>RANITIDINA 300</td>
                   <td>SAIMED</td>
                   <td>CAPSULA</td>
                 </tr>
             </tbody>
             <!--Table body-->
         </table>
         <!--Table-->
         <div class="text-center mt-4">
             <button class="btn btn-outline-info" type="button">Generar Orden<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
