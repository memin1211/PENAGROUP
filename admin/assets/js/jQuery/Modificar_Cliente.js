//Modificar Sucursal
jQuery(document).on('submit','#FormModificarCliente',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Cliente.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                }
              })
              .done(function(resp){
                setTimeout(function(){
                  toastr["success"]("Cliente Modificado Exitosamente!");
                  document.getElementById("IdCliente").value = "";
                  document.getElementById("NumCta").value = "";
                  document.getElementById("PrimerNombreCliente").value = "";
                  document.getElementById("SegundoNombreCliente").value = "";
                  document.getElementById("TercerNombreCliente").value = "";
                  document.getElementById("PrimerApellidoCliente").value = "";
                  document.getElementById("SegundoApellidoCliente").value = "";
                  document.getElementById("DireccionCliente").value = "";
                  document.getElementById("TelefonoCliente").value = "";
                  document.getElementById("NitCliente").value = "";
                  document.getElementById("NrcCliente").value = "";
                  document.getElementById("EmpresaCliente").value = "";
                  document.getElementById("GiroCliente").value = "";
                  document.getElementById("FechaNacimientoCliente").value = "";
                },3000);
              })
              .fail(function(resp){
                setTimeout(function(){
                  toastr["warning"]("UPS! Hubo un Error al Intentar Enviar los Datos. Favor Comuniquelo a Soporte Técnico");
                  },3000);
              })
              .always(function(){
                console.log("complete");
            });
      });
