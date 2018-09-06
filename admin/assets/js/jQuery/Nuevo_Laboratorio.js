//Nuevo Laboratorio
jQuery(document).on('submit','#FrmNvoLab',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Laboratorio.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Laboratorio Creado Exitosamente!");
                    document.getElementById('NombreLaboratorio').value='';
                    document.getElementById('AbreviaturaLaboratorio').value='';
                    document.getElementById('NombreLegalLaboratorio').value='';
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
