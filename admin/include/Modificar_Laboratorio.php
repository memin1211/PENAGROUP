<div class="modal fade" id="ModalModLab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Modificar Laboratorio</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <!-- Default form register -->
               <form id="FrmModLab">
                 <input type="hidden" name="Id_Laboratorio" value="">
                 <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                     <!-- Material input text -->
                     <div class="md-form">
                         <i class="fa fa-user prefix grey-text"></i>
                         <input type="text" id="ModNombreLaboratorio" name="ModNombreLaboratorio" class="form-control" value="<?= $Id; ?>" required>
                         <label for="ModNombreProveedor">Nuevo Nombre Laboratorio</label>
                     </div>
                   </div>

                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Material input text -->
                     <div class="md-form">
                         <i class="fa fa-trademark prefix grey-text"></i>
                         <input type="text" id="ModAbreviaturaLaboratorio" name="ModAbreviaturaLaboratorio" class="form-control" value="" required>
                         <label for="ModAbreviaturaProveedor">Abreviatura</label>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                     <!-- Material input text -->
                     <div class="md-form">
                         <i class="fa fa-address-card prefix grey-text"></i>
                         <input type="text" id="ModNombreLegalLaboratorio" name="ModNombreLegalLaboratorio" class="form-control" value="">
                         <label for="ModNombreLegalProveedor">Nombre Legal</label>
                     </div>
                   </div>

                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Material input text -->
                     <select class="mdb-select colorful-select dropdown-info" id="ModIdEstado" name="ModIdEstado" required>
                        <option value="" disabled selected>Estado</option>
                        <?php
                           foreach ($MatrizEstadoLaboratorio as $value) {
                             ?>
                             <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                        <?php
                           }
                         ?>
                    </select>
                    <label>Estado</label>
                   </div>
                 </div>
                 <div class="text-center mt-4">
                     <button class="btn btn-outline-info" type="button">Modificar<i class="fa fa-refresh ml-2"></i></button>
                 </div>
               </form>
               <!-- Default form register -->
            </div>
         </div>
      </div>
   </div>
