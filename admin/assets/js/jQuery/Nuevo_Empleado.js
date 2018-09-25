//Nuevo Empleado
jQuery(document).on('submit','#FormNuevoEmpleado',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Empleado.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Empleado Creado Exitosamente!");
                    document.getElementById('PrimerNombreEmpleado').value='';
                    document.getElementById('SegundoNombreEmpleado').value='';
                    document.getElementById('TercerNombreEmpleado').value='';
                    document.getElementById('PrimerApellidoEmpleado').value='';
                    document.getElementById('SegundoApellidoEmpleado').value='';
                    document.getElementById('DireccionEmpleado').value='';
                    document.getElementById('FechaNacimientoEmpleado').value='';
                    document.getElementById('DuiEmpleado').value='';
                    document.getElementById('NitEmpleado').value='';
                    document.getElementById('TelefonoFijoEmpleado').value='';
                    document.getElementById('CelularEmpleado').value='';
                    document.getElementById('EstadoCivilEmpleado').value='';
                    document.getElementById('GeneroEmpleado').value='';
                  },3000);
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
              })
              .fail(function(respuesta){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
