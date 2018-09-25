//Nuevo Laboratorio
jQuery(document).on('submit','#FrmModLab',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Laboratorio.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                }
              })
              .done(function(resp){
                setTimeout(function(){
                  toastr["success"]("Laboratorio Modificado Exitosamente!");
                  document.getElementById('NombreLaboratorio').value='';
                  document.getElementById('AbreviaturaLaboratorio').value='';
                  document.getElementById('NombreLegalLaboratorio').value='';
                  document.getElementById('IdEstado').selectedIndex='0';
                  },3000);
              })
              .fail(function(resp){
                setTimeout(function(){
                toastr["warning"]("Error!");
                },3000);
              })
              .always(function(){
                console.log("complete");
            });
      });
