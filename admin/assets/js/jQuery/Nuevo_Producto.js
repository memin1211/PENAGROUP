//Nuevo Producto
jQuery(document).on('submit','#FrmNvoProd',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Producto.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Producto Creado Exitosamente!");
                    document.getElementById('CodigoBarraProducto').value='';
                    document.getElementById('NombreProducto').value='';
                    document.getElementById('Id_Laboratorio').value='';
                    document.getElementById('Id_Presentacion').value='';
                    document.getElementById('Id_Categoria').value='';
                    document.getElementById('Id_Entidad').value='';
                    document.getElementById('Id_Estado').value='';
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
