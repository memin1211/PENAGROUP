<div class="modal fade" id="ModalPermisos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Modificar Permisos</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <!-- Default form register -->
               <form action="#" method="POST">
                 <div class="row col">
                   <!-- Default input name -->
                    <label for="NombreUsuario" class="grey-text">Usuario</label>
                    <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control" style="width:90%;" value="MIGUEL PEÑA" disabled>
                 </div>
                 <div class="row col">
                   <label>Módulos</label>
                 </div>
                 <div class="row col">
                  <!-- Form inline with radios -->
                      <form class="form-inline" id="Form_Mod_Permiso_Usu" name="Form_Mod_Permiso_Usu" style="width:100%;">

                          <div class="form-check" style="width:25%;">
                              <input class="form-check-input" type="checkbox" name="Mod_Administracion" id="Modulos0" onclick="javascript:activar()">
                              <label class="form-check-label" for="Modulos0">
                                  Administración
                              </label>
                          </div>
                          <div class="form-check" style="width:25%;">
                              <input class="form-check-input" type="checkbox" name="Mod_Punto_Venta" id="Modulos1"  onclick="javascript:activar()">
                              <label class="form-check-label" for="Modulos1">
                                  Punto de Venta
                              </label>
                          </div>
                          <div class="form-check" style="width:25%;">
                              <input class="form-check-input" type="checkbox" name="Mod_Inventario" id="Modulos2"  onclick="javascript:activar()">
                              <label class="form-check-label" for="Modulos2">
                                  Inventario
                              </label>
                          </div>
                          <div class="form-check" style="width:25%;">
                              <input class="form-check-input" type="checkbox" name="Mod_Contabilidad" id="Modulos3" disabled  onclick="javascript:activar()">
                              <label class="form-check-label" for="Modulos3">
                                  Contabilidad
                              </label>
                          </div>
                      </form>
                  <!-- Form inline with radios -->
                 </div>
                 <div class="row col">
                   <div class="col-6">
                     <!-- Seleccionador de Permisos-->
                     <select class="mdb-select" id="Select_Modulo0" name="Select_Mod_Administracion" multiple style="width:100%;" >
                          <option value="" disabled selected>Opciones de Menú</option>
                          <option value="1">CLIENTE</option>
                          <option value="2">Gestionar Clientes</option>
                          <option value="3">EMPLEADO</option>
                          <option value="4">Gestionar Empleados</option>
                          <option value="5">SUCURSAL</option>
                          <option value="6">Gestionar Sucursales</option>
                          <option value="7">USUARIOS</option>
                          <option value="8">Gestionar Usuarios</option>
                      </select>
                      <label>Módulo de Administracion</label>
                      <!-- Fin Seleccionador de Permisos-->
                   </div>
                   <div class="col-6">
                     <!-- Seleccionador de Permisos-->
                     <select class="mdb-select" id="Select_Modulo1" name="Select_Mod_Punto_Venta" multiple style="width:100%;" >
                          <option value="" disabled selected>Opciones de Menú</option>
                          <option value="1">COBROS</option>
                          <option value="2">Gestionar Cobros</option>
                          <option value="3">FACTURACION</option>
                          <option value="4">Facturar</option>
                          <option value="5">Gestionar Facturas</option>
                          <option value="6">PEDIDOS</option>
                          <option value="7">Gestionar Pedidos</option>
                      </select>
                      <label>Modulo Punto de Venta</label>
                      <!-- Fin Seleccionador de Permisos-->
                   </div>
                 </div>
                 <div class="row col">
                   <div class="col-6">
                     <!-- Seleccionador de Permisos-->
                     <select class="mdb-select" id="Select_Modulo2" name="Select_Mod_Inventario" multiple style="width:100%;" >
                          <option value="" disabled selected>Opciones de Menú</option>
                          <option value="1">BODEGA</option>
                          <option value="2">Gestionar Bodega</option>
                          <option value="3">DISTRIBUIDORES</option>
                          <option value="4">Gestionar Laboratorios</option>
                          <option value="5">Gestionar Proveedor</option>
                          <option value="6">INVENTARIO</option>
                          <option value="7">Gestionar Ordenes</option>
                          <option value="8">Gestionar Productos</option>
                      </select>
                      <label>Módulo de Inventario</label>
                      <!-- Fin Seleccionador de Permisos-->
                   </div>
                   <div class="col-6">
                     <!-- Seleccionador de Permisos-->
                     <select class="mdb-select" id="Select_Modulo3" name="Select_Mod_Contabilidad" multiple style="width:100%;" disabled>
                          <option value="" disabled selected>Opciones de Menú</option>
                          <option value="1">CLIENTE</option>
                          <option value="2">Gestionar Clientes</option>
                          <option value="3">EMPLEADO</option>
                          <option value="4">Gestionar Empleados</option>
                          <option value="5">SUCURSAL</option>
                          <option value="6">Gestionar Sucursales</option>
                          <option value="7">USUARIOS</option>
                          <option value="8">Gestionar Usuarios</option>
                      </select>
                      <label>Modulo de Contabilidad</label>
                      <!-- Fin Seleccionador de Permisos-->
                   </div>
                 </div>
                 <div class="text-center mt-4">
                     <button class="btn btn-outline-info" type="button">Guardar<i class="fa fa-save ml-2"></i></button>
                 </div>
               </form>
               <!-- Default form register -->
            </div>
         </div>
      </div>
   </div>
