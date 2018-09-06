//Nuevo Sucursal
jQuery(document).on('submit','#FormNuevoSucursal',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Sucursal.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Sucursal Creada Exitosamente!");
                    document.getElementById('NombreSucursal').value='';
                    document.getElementById('NombreCortoSucursal').value='';
                    document.getElementById('DireccionSucursal').value='';
                    document.getElementById('TelefonoSucursal').value='';
                    document.getElementById('Logo').value='';
                    document.getElementById('Id_Municipio').value='';
                    document.getElementById('Id_Encargado').value='';
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
