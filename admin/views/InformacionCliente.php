<div class="modal fade" id="InformacionCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Informacion del Cliente</h5>
             <h5 style="margin-left: 35%;"><?php echo "Fecha Emision: ".$fecha; ?></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <!-- Material form contact -->
             <form>
                  <div class="row">
                    <div class="col-12">
                      <!-- Material input text -->
                      <div class="md-form">
                          <i class="fa fa-user prefix grey-text"></i>
                          <input type="text" id="NombreCliente" name="NombreCliente" class="form-control" style="width:90%;" required>
                          <label for="NombreCliente">Nombre Cliente</label>
                      </div>
                    </div>
                   </div>

                 <div class="row">
                   <div class="col-4">
                    <select class="mdb-select colorful-select dropdown-info">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="1">Ticket</option>
                        <option value="2">Factura</option>
                        <option value="3">CCF</option>
                    </select>
                    <label>Tipo Documento</label>
                   </div>
                   <div class="col-4">
                    <select class="mdb-select colorful-select dropdown-info">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="1">Contado</option>
                        <option value="2">Credito 7 dias</option>
                        <option value="3">Credito 15 dias</option>
                        <option value="4">Credito 30 dias</option>
                    </select>
                    <label>Condicion Pago</label>
                   </div>
                   <div class="col-4">
                    <select class="mdb-select colorful-select dropdown-info">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="1">Efectivo</option>
                        <option value="2">Cheque</option>
                        <option value="3">Transferemcia</option>
                    </select>
                    <label>Forma Pago</label>
                   </div>
                 </div>
                  <div class="text-center mt-4">
                      <button class="btn btn-outline-info" type="button">Generar Factura<i class="fa fa-download ml-2"></i></button>
                  </div>
             </form>
             <!-- Material form contact -->
            </div>
         </div>
      </div>
   </div>
