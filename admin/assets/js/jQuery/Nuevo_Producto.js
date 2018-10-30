//Nuevo Proveedor
jQuery(document).on('submit','#FormNuevoProducto',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Producto.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Cliente Creado Exitosamente!");
                    document.getElementById('NombreProducto').value='';
                    document.getElementById('CodBarraProducto').value='';
                    document.getElementById('IdLaboratorio').value='';
                    document.getElementById('IdPresentacion').value='';
                    document.getElementById('IdCategoria').value='';
                    document.getElementById('ComponentesProducto').value='';
                    document.getElementById('CantidadProducto').value='';
                    document.getElementById('CostoProducto').value='';
                    document.getElementById('PrecioProducto').value='';

                  },3000);
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
              })
              .fail(function(respuesta){
                console.log(respuesta.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
