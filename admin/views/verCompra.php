<div class="tab-pane fade in show active" id="verCompra" role="tabpanel">
   <!--Pagination -->
      <?php include_once("../include/paginador.php"); ?>
    <!--Fin Pagination -->
    <br>
    <div class="card">
      <div class="card-body">
          <!--Table-->
          <table class="table table-hover table-responsive-md table-fixed">
              <!--Table head-->
              <thead class="special-color white-text">
                  <tr>
                      <th>CÓDIGO</th>
                      <th>NOMBRE</th>
                      <th>FECHA EMISIÓN</th>
                      <th>MONTO</th>
                      <th>ESTADO</th>
                      <th></th>
                  </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>ROBLES S.A DE C.V</td>
                      <td>17/05/2018</td>
                      <td>$250.35</td>
                      <td>PENDIENTE APROBACIÓN</td>
                      <td><i class="fa fa-eye puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalVerDetalle" title="Ver Detalle"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>BIOKEMICAL S.A DE C.V</td>
                    <td>16/05/2018</td>
                    <td>$75.50</td>
                    <td>APROBADA</td>
                    <td><i class="fa fa-eye puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalVerDetalle" title="Ver Detalle"></i></td>
                  </tr>
              </tbody>
              <!--Table body-->
          </table>
          <!--Table-->
      </div>
  </div>
  <div class="row">
    <?php include_once("../include/Ver_Detalle_Orden.php"); ?>
  </div>
</div>
