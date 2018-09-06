$(document).ready(function()
  {
     //Validando Nombre del Laboratorio
     $("#NombreLaboratorio").blur(function() {
        if (document.getElementById('NombreLaboratorio').value=='') {
           document.getElementById('NombreLaboratorio').focus();
           toastr["warning"]("Favor, Digite el Nombre del Laboratorio!");
        }
     });

     //Validando Abreviatura del Laboratorio
     $("#AbreviaturaLaboratorio").blur(function() {
        if (document.getElementById('AbreviaturaLaboratorio').value=='') {
           document.getElementById('AbreviaturaLaboratorio').focus();
           toastr["warning"]("Favor, Digite la Abreviatura del Laboratorio!");
        }
     });
});
