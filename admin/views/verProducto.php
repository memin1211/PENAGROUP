<div class="tab-pane fade in show active" id="verProducto" role="tabpanel">
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
                      <th>CODIGO</th>
                      <th>PRODUCTO</th>
                     <th>LABORATORIO</th>
                      <th>TIPO PRODUCTO</th>
                      <th>CANT/UNI</th>
                      <th>COSTO</th>
                      <th>P/P</th>
                      <th>CATEGORIA</th>
                  </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>ACETAMINOFEN</td>
                      <td>MK</td>
                      <td>TABLETA</td>
                      <td>700</td>
                      <td>0.04</td>
                      <td>0.06</td>
                      <td>VENTA LIBRE</td>
                  </tr>
                  <tr>
                     <th scope="row">2</th>
                     <td>ACETAMINOFEN</td>
                     <td>SYM</td>
                     <td>BLISTER</td>
                     <td>1000</td>
                     <td>0.08</td>
                     <td>0.25</td>
                     <td>VENTA LIBRE</td>
                  </tr>
                  <tr>
                     <th scope="row">3</th>
                     <td>TETRA B 120/10</td>
                     <td>SAIMED</td>
                     <td>JARABE</td>
                     <td>10</td>
                     <td>3.25</td>
                     <td>4.50</td>
                     <td>ETICO</td>
                  </tr>
              </tbody>
              <!--Table body-->
          </table>
          <!--Table-->
      </div>
  </div>
</div>
