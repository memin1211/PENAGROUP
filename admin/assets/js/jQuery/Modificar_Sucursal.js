//Modificar Sucursal
jQuery(document).on('submit','#FormModificarSucursal',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Sucursal.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Sucursal Modificada Exitosamente!");
                    document.getElementById('NombreSucursal').value='';
                    document.getElementById('NombreCortoSucursal').value='';
                    document.getElementById('DireccionSucursal').value='';
                    document.getElementById('TelefonoSucursal').value='';
                  },3000);
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
