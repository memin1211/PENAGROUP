<div class="tab-pane fade" id="nuevoProducto" role="tabpanel">
    <!-- Material form contact -->
     <form>
         <p class="h4 text-center mb-4">Nuevo Producto</p>

         <!-- Material input text -->
         <div class="md-form">
             <i class="fa fa-vcard prefix grey-text"></i>
             <input type="text" id="NombreProducto" name="NombreProducto" class="form-control" required>
             <label for="NombreProducto">Producto</label>
         </div>
         <br>

         <div class="row">
            <div class="col-4">
               <!-- Material input text -->
               <select class="mdb-select">
                  <option value="" disabled selected>Laboratorio</option>
                  <option value=""></option>
                  <option value="1">MK</option>
                  <option value="2">SYM</option>
                  <option value="3">SAIMED</option>
              </select>
              <label>Laboratorio</label>
            </div>
            <div class="col-4">
               <!-- Material input text -->
               <select class="mdb-select">
                  <option value="" disabled selected>Tipo Producto</option>
                  <option value=""></option>
                  <option value="1">TABLETA</option>
                  <option value="2">JARABE</option>
                  <option value="3">BLISTER</option>
              </select>
              <label>Tipo Producto</label>
            </div>
            <div class="col-4">
               <!-- Material input text -->
               <select class="mdb-select">
                  <option value="" disabled selected>Categoria</option>
                  <option value=""></option>
                  <option value="1">ETICO</option>
                  <option value="2">VENTA LIBRE</option>
              </select>
              <label>Categoria</label>
            </div>
        </div>
        <br>

        <!-- Material input text -->
        <div class="md-form">
           <i class="fa fa-hashtag prefix grey-text"></i>
           <input type="email" id="CantidadProdcuto" name="CantidadProducto" class="form-control">
           <label for="CantidadProducto">Cant/Uni</label>
        </div>

        <!-- Material input text -->
        <div class="md-form">
           <i class="fa fa-usd prefix grey-text"></i>
           <input type="email" id="CostoProducto" name="CostoProducto" class="form-control">
           <label for="CostoProducto">Costo</label>
        </div>

        <!-- Material input text -->
           <div class="md-form">
              <i class="fa fa-usd prefix grey-text"></i>
              <input type="email" id="PrecioProducto" name="PrecioProducto" class="form-control">
              <label for="PrecioProducto">Precio</label>
           </div>

         <div class="text-center mt-4">
             <button class="btn btn-outline-info" type="button">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
