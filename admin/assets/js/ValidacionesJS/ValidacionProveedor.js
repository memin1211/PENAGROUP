$(document).ready(function()
  {
    //Validacion del Formulario Nuevo Proveedor
     //Validando Nombre del Proveedor
     $("#NombreProveedor").blur(function() {
        if (document.getElementById('NombreProveedor').value=='') {
           document.getElementById('NombreProveedor').focus();
           toastr["warning"]("Favor, Digite el Nombre del Proveedor!");
        }
     });

     //Validando Dirección del Proveedor
     $("#DireccionProveedor").blur(function() {
        if (document.getElementById('DireccionProveedor').value=='') {
           document.getElementById('DireccionProveedor').focus();
           toastr["warning"]("Favor, Digite la Dirección del Proveedor!");
        }
     });

     //Validando Departamento del Proveedor
     $("#Departamento").blur(function() {
        if (document.getElementById('Departamento').value=='') {
           document.getElementById('Departamento').focus();
           toastr["warning"]("Favor, Seleccione Un Departamento!");
        }else{
          document.getElementById('Municipio').style.disabled=false;
        }
     });

     //Validando Municipio del Proveedor
     $("#Municipio").blur(function() {
        if (document.getElementById('Municipio').value=='') {
           document.getElementById('Municipio').focus();
           toastr["warning"]("Favor, Seleccione Un Municipio!");
        }
     });

     //Validando Telefono Fijo del Proveedor
     $("#TelefonoProveedor").blur(function() {
        if (document.getElementById('TelefonoProveedor').value=='') {
           document.getElementById('TelefonoProveedor').focus();
           toastr["warning"]("Favor, Digite el Teléfono Fijo del Proveedor!");
        }
     });

     //Validando Giro del Proveedor
     $("#GiroProveedor").blur(function() {
        if (document.getElementById('GiroProveedor').value=='') {
           document.getElementById('GiroProveedor').focus();
           toastr["warning"]("Favor, Digite el Giro del Proveedor!");
        }
     });

     //Validacion del Formulario Modificar Proveedor

     //Validando Nombre del Proveedor
     $("#ModificarNombreProveedor").blur(function() {
        if (document.getElementById('ModificarNombreProveedor').value=='') {
           document.getElementById('ModificarNombreProveedor').focus();
           toastr["warning"]("Favor, Digite el Nombre del Proveedor!");
        }
     });

     //Validando Dirección del Proveedor
     $("#ModificarDireccionProveedor").blur(function() {
        if (document.getElementById('ModificarDireccionProveedor').value=='') {
           document.getElementById('ModificarDireccionProveedor').focus();
           toastr["warning"]("Favor, Digite la Dirección del Proveedor!");
        }
     });

     //Validando Departamento del Proveedor
     $("#ModificarDepartamento").blur(function() {
        if (document.getElementById('ModificarDepartamento').value=='') {
           document.getElementById('ModificarDepartamento').focus();
           toastr["warning"]("Favor, Seleccione Un Departamento!");
        }else{
          document.getElementById('Municipio').style.disabled=false;
        }
     });

     //Validando Municipio del Proveedor
     $("#ModificarMunicipio").blur(function() {
        if (document.getElementById('ModificarMunicipio').value=='') {
           document.getElementById('ModificarMunicipio').focus();
           toastr["warning"]("Favor, Seleccione Un Municipio!");
        }
     });

     //Validando Telefono Fijo del Proveedor
     $("#ModificarTelefonoProveedor").blur(function() {
        if (document.getElementById('ModificarTelefonoProveedor').value=='') {
           document.getElementById('ModificarTelefonoProveedor').focus();
           toastr["warning"]("Favor, Digite el Teléfono Fijo del Proveedor!");
        }
     });

     //Validando Giro del Proveedor
     $("#ModificarGiroProveedor").blur(function() {
        if (document.getElementById('ModificarGiroProveedor').value=='') {
           document.getElementById('ModificarGiroProveedor').focus();
           toastr["warning"]("Favor, Digite el Giro del Proveedor!");
        }
     });
});
