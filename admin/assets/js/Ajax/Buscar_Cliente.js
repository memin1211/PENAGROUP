//VALIDACION DEL NUMERO DE CHEQUE USANDO AJAX
          var xmlHttp; //INICIAMOS LA VARIABLE XMLHTTP DE AJAX
          function Buscar_Cliente(VARIABLE){ //FUNCION QUE ESTARA EN EL TEXTBOX DE SERIE CHEQUE CON PROPIEDAD ONBLUR
             xmlHttp=GetXmlHttpObject(); //HACEMOS INSTANCIA A LA FUNCION QUE DEVUELVE EL TIPO DE OBJETO REFERENTE AL NAVEGADOR
             if (xmlHttp==null){ //SI ESA VARIABLE ES NULA EL NAVEGADOR NO SOPORTA AJAX
                  alert ("Tu navegador no soporta AJAX! No podras usar esta aplicación.");
                  return;
             }
             if (VARIABLE=='') {
                document.getElementById('BuscarCliente').focus();
                toastr["warning"]("Digite el Nit del Cliente a Buscar!");
             }else{
                var url="../include/Buscar_Cliente.php"; //URL DE ARCHIVO AL QUE IREMOS A HACER LA VALIDACION
                url=url+"?Nit="+VARIABLE; //ENVIAMOS AL ARCHIVO LAS VARIABLES PARA COMPARAR
                //Puedes crear una variable en la funcion que diga cual es el id que deseas verificar tu escoges
                //ENVIAMOS LOS PARAMETROS VACIOS AL INICIO DE LA FUNCION
                xmlHttp.onreadystatechange=function(){ //INICIAMOS LA FUNCION
                         if (xmlHttp.readyState==4)
                   { // 4 == A QUE SE HA OBTENIDO RESPUESTA Y GUARDA EL RESULTADO EN RESPONSETEXT
                      var resultado = xmlHttp.responseText; //GUARDAMOS EL RESULTADO EN UNA VARIABLE PARA COMPARAR (ENVIAMOS NUMEROS)
                      var cliente = new Array();
                      if(resultado != '')
                      {
                           //SI ES MAYOR QUE 0 RECIBIMOS PARAMETRO PARA DEJAR PASAR
                        cliente = resultado.split('|');
                        if (cliente!='') {
                          document.getElementById("IdCliente").value = cliente[0];
                          document.getElementById("NumCta").value = cliente[1];
                          document.getElementById("PrimerNombreCliente").value = cliente[2];
                          document.getElementById("SegundoNombreCliente").value = cliente[3];
                          document.getElementById("TercerNombreCliente").value = cliente[4];
                          document.getElementById("PrimerApellidoCliente").value = cliente[5];
                          document.getElementById("SegundoApellidoCliente").value = cliente[6];
                          document.getElementById("DireccionCliente").value = cliente[7];
                          document.getElementById("TelefonoCliente").value = cliente[8];
                          document.getElementById("NitCliente").value = cliente[9];
                          document.getElementById("NrcCliente").value = cliente[10];
                          document.getElementById("EmpresaCliente").value = cliente[11];
                          document.getElementById("GiroCliente").value = cliente[12];
                          document.getElementById("FechaNacimientoCliente").value = cliente[14];
                        }else {
                          document.getElementById('BuscarCliente').focus();
                          toastr["warning"]("No Se Encontro El Cliente Solicitado, Verifique Su Existencia!");
                        }
                  }else {
                    document.getElementById('BuscarCliente').focus();
                    toastr["warning"]("No Se Encontro El Cliente Solicitado, Verifique Su Existencia!");
                  }
            }
         }
                xmlHttp.open("GET",url,true); //ENVIA LOS DATOS EN FOTMA GET A LA PAGINA QUE DEFINIMOS ARRIBA
                xmlHttp.send(null);
             }
         }

          function GetXmlHttpObject(){
             var xmlHttp=null;
             try{
                  // Firefox, Opera 8.0+, Safari
                  xmlHttp=new XMLHttpRequest();
             }catch(e){
                  // Internet Explorer
                  try{
                      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                  }catch(e){
                      try{
                          xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                      }catch(e){}
                  }
             }
             return xmlHttp;
          }
