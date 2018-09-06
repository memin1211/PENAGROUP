$(document).ready(function()
  {
     //Validando Primer Nombre del Empleado
     $("#PrimerNombreEmpleado").blur(function() {
        if (document.getElementById('PrimerNombreEmpleado').value=='') {
           document.getElementById('PrimerNombreEmpleado').focus();
           toastr["warning"]("Favor, Digite el Primer Nombre del Empleado!");
        }
     });

     //Validando Primre Apellido del Empleado
     $("#PrimerApellidoEmpleado").blur(function() {
        if (document.getElementById('PrimerApellidoEmpleado').value=='') {
           document.getElementById('PrimerApellidoEmpleado').focus();
           toastr["warning"]("Favor, Digite el Primer Apellido del Empleado!");
        }
     });

     //Validando Segundo Apellido del Empleado
     $("#SegundoApellidoEmpleado").blur(function() {
        if (document.getElementById('SegundoApellidoEmpleado').value=='') {
           document.getElementById('SegundoApellidoEmpleado').focus();
           toastr["warning"]("Favor, Digite el Segundo Apellido del Empleado!");
        }
     });

     //Validando Direccion del Empleado
     $("#DireccionEmpleado").blur(function() {
        if (document.getElementById('DireccionEmpleado').value=='') {
           document.getElementById('DireccionEmpleado').focus();
           toastr["warning"]("Favor, Digite la Direccion del Empleado!");
        }
     });

     //Validando Dui del Empleado
     $("#DuiEmpleado").blur(function() {
        if (document.getElementById('DuiEmpleado').value=='') {
           document.getElementById('DuiEmpleado').focus();
           toastr["warning"]("Favor, Digite el Dui del Empleado!");
        }
     });

     //Validando Nit del Empleado
     $("#NitEmpleado").blur(function() {
        if (document.getElementById('NitEmpleado').value=='') {
           document.getElementById('NitEmpleado').focus();
           toastr["warning"]("Favor, Digite el Nit del Empleado!");
        }
     });

       jQuery(function($)
         {
         $("#FechaNacimientoEmpleado").mask("99-99-9999");
         });

  });
