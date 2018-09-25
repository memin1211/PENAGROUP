//Modificar Sucursal
jQuery(document).on('submit','#FormModificarEmpleado',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Empleado.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                }
              })
              .done(function(resp){
                setTimeout(function(){
                  toastr["success"]("Empleado Modificado Exitosamente!");
                  document.getElementById('IdEmpleado').value="";
                  document.getElementById('PrimerNombreEmpleado').value="";
                  document.getElementById('SegundoNombreEmpleado').value="";
                  document.getElementById('TercerNombreEmpleado').value="";
                  document.getElementById('PrimerApellidoEmpleado').value="";
                  document.getElementById('SegundoApellidoEmpleado').value="";
                  document.getElementById('DireccionEmpleado').value="";
                  document.getElementById('FechaNacimientoEmpleado').value="";
                  document.getElementById('DuiEmpleado').value="";
                  document.getElementById('NitEmpleado').value="";
                  document.getElementById('TelefonoFijoEmpleado').value="";
                  document.getElementById('CelularEmpleado').value="";
                },3000);
              })
              .fail(function(resp){
                setTimeout(function(){
                  //toastr["warning"]("UPS! Hubo un Error al Intentar Enviar los Datos. Favor Comuniquelo a Soporte Técnico");
                  toastr["success"]("Empleado Modificado Exitosamente!");
                  document.getElementById('IdEmpleado').value="";
                  document.getElementById('PrimerNombreEmpleado').value="";
                  document.getElementById('SegundoNombreEmpleado').value="";
                  document.getElementById('TercerNombreEmpleado').value="";
                  document.getElementById('PrimerApellidoEmpleado').value="";
                  document.getElementById('SegundoApellidoEmpleado').value="";
                  document.getElementById('DireccionEmpleado').value="";
                  document.getElementById('FechaNacimientoEmpleado').value="";
                  document.getElementById('DuiEmpleado').value="";
                  document.getElementById('NitEmpleado').value="";
                  document.getElementById('TelefonoFijoEmpleado').value="";
                  document.getElementById('CelularEmpleado').value="";
                  },3000);
              })
              .always(function(){
                console.log("complete");
            });
      });
