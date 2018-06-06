<div class="tab-pane fade in show active" id="verUsuario" role="tabpanel">
    <div class="card">
      <div class="card-body">
         <div class="row">
           <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>CORREO</th>
                     <th>CARGO</th>
                     <th>DEPARTAMENTO</th>
                     <th>ESTADO</th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i=1; $i < 11; $i++) {
                     ?>
                     <tr>
                        <td><?= $i;?></td>
                       <td>Allan Brito</td>
                       <td>allan@dominio.com</td>
                       <td>administrador</td>
                       <td>administracion</td>
                       <td>Activo</td>
                       <td><i class="fa fa-key puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="Modificar Clave"></i></td>
                       <td><i class="fa fa-gear puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalPermisos" title="Modificar Permisos"></i></td>
                    </tr>
                     <?php
                  }
                  ?>
             </tbody>
               <tfoot>
                  <tr>
                     <th>CODIGO</th>
                     <th>NOMBRE</th>
                     <th>CORREO</th>
                     <th>CARGO</th>
                     <th>DEPARTAMENTO</th>
                     <th>ESTADO</th>
                     <th></th>
                     <th></th>
                  </tr>
               </tfoot>
           </table>
         </div>
      </div>
  </div>

  <div class="row">
    <!-- Modal Modificar Clave-->
      <?php include_once("../include/Modificar_Clave_Usuario.php");?>
    <!-- Fin Modal Modificar Clave-->
  </div>

  <div class="row">
    <!-- Modal Modificar Permisos-->
      <?php include_once("../include/Modificar_Permiso_Usuario.php");?>
    <!-- Fin Modal Modificar Permisos-->
  </div>
</div>
