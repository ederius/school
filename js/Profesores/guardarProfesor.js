$(document).on("ready", function() {
    $(".crearProfesor").live("click", function(){

        var nombre=$("#nombre").val();
        var direccion=$("#direccion").val();
        var celular=$("#celular").val();
        var telefono=$("#telefono").val();
        
        var Matematicas=        $("#Matematicas").val();
        var Estadistica=        $("#Estadistica").val();
        var Geografia=          $("#Geografia").val();
        var Geometria=          $("#Geometria").val();
        var Historia=           $("#Historia").val();
        var Espanol=            $("#Espanol").val();
        var Ingles=             $("#Ingles").val();
        var Informatica=        $("#Informatica").val();
        var Arte=               $("#Arte").val();
        var Urbanidad=          $("#Urbanidad").val();
        var Deportes=           $("#Deportes").val();
        var Etica=              $("#Etica").val();
        var Biologia=           $("#Biologia").val();
        var Quimica=            $("#Quimica").val();
        var Fisica=             $("#Fisica").val();
        var Religion=           $("#Religion").val();
        var Trigonometria=      $("#Trigonometria").val();
        var CienciasPoliticas=  $("#CienciasPoliticas").val();
        var Emprendimiento=     $("#Emprendimiento").val();
        var Democracia=         $("#Democracia").val();
        var Algebra=            $("#Algebra").val();
        var Naturales=          $("#Naturales").val();

        

        var datos ="";
        
        if( $('#Matematicas').attr('checked') )  { 
                                                   if(datos=="")
                                                        {
                                                            datos=$('#Matematicas').attr("id");}
                                                   else{
                                                            datos+=","+$('#Matematicas').attr("id");
                                                        }                          
                                                }


        if( $('#Estadistica').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Estadistica').attr("id");}
                                                   else{
                                                            datos+=","+$('#Estadistica').attr("id");
                                                   }                          
                                                }


        if( $('#Geografia').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Geografia').attr("id");}
                                                   else{
                                                            datos+=","+$('#Geografia').attr("id");
                                                   }                          
                                                }  


        if( $('#Geometria').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Geometria').attr("id");}
                                                   else{
                                                            datos+=","+$('#Geometria').attr("id");
                                                   }                          
                                                } 


        if( $('#Historia').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Historia').attr("id");}
                                                   else{
                                                            datos+=","+$('#Historia').attr("id");
                                                   }                          
                                                }  


        if( $('#Espanol').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Espanol').attr("id");}
                                                   else{
                                                            datos+=","+$('#Espanol').attr("id");
                                                   }                          
                                                }  


        if( $('#Ingles').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Ingles').attr("id");}
                                                   else{
                                                            datos+=","+$('#Ingles').attr("id");
                                                   }                          
                                                }  


        if( $('#Informatica').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Informatica').attr("id");}
                                                   else{
                                                            datos+=","+$('#Informatica').attr("id");
                                                   }                          
                                                } 


        if( $('#Arte').attr('checked') )        { if(datos=="")
                                                        {
                                                            datos=$('#Arte').attr("id");}
                                                   else{
                                                            datos+=","+$('#Arte').attr("id");
                                                   }                          
                                                }   


        if( $('#Urbanidad').attr('checked') )    { if(datos=="")
                                                        {
                                                            datos=$('#Urbanidad').attr("id");}
                                                   else{
                                                            datos+=","+$('#Urbanidad').attr("id");
                                                   }                          
                                                }  


        if( $('#Deportes').attr('checked') )     { if(datos=="")
                                                        {
                                                            datos=$('#Deportes').attr("id");}
                                                   else{
                                                            datos+=","+$('#Deportes').attr("id");
                                                   }                          
                                                }  


        if( $('#Etica').attr('checked') )         { if(datos=="")
                                                        {
                                                            datos=$('#Etica').attr("id");}
                                                   else{
                                                            datos+=","+$('#Etica').attr("id");
                                                   }                          
                                                }  
        if( $('#Biologia').attr('checked') )   { if(datos=="")
                                                        {
                                                            datos=$('#Biologia').attr("id");}
                                                   else{
                                                            datos+=","+$('#Biologia').attr("id");
                                                   }                          
                                                }  


        if( $('#Quimica').attr('checked') )    { if(datos=="")
                                                        {
                                                            datos=$('#Quimica').attr("id");}
                                                   else{
                                                            datos+=","+$('#Quimica').attr("id");
                                                   }                          
                                                }   


        if( $('#Fisica').attr('checked') )      { if(datos=="")
                                                        {
                                                            datos=$('#Fisica').attr("id");}
                                                   else{
                                                            datos+=","+$('#Fisica').attr("id");
                                                   }                          
                                                }        


        if( $('#Religion').attr('checked') )     { if(datos=="")
                                                        {
                                                            datos=$('#Religion').attr("id");}
                                                   else{
                                                            datos+=","+$('#Religion').attr("id");
                                                   }                          
                                                }        


        if( $('#Trigonometria').attr('checked') )  { if(datos=="")
                                                        {
                                                            datos=$('#Trigonometria').attr("id");}
                                                   else{
                                                            datos+=","+$('#Trigonometria').attr("id");
                                                   }                          
                                                }  


        if( $('#CienciasPoliticas').attr('checked') ){ if(datos=="")
                                                        {
                                                            datos=$('#CienciasPoliticas').attr("id");}
                                                   else{
                                                            datos+=","+$('#CienciasPoliticas').attr("id");
                                                   }
                                               }

                                                      
        if( $('#Emprendimiento').attr('checked') ) { if(datos=="")
                                                        {
                                                            datos=$('#Emprendimiento').attr("id");}
                                                   else{
                                                            datos+=","+$('#Emprendimiento').attr("id");
                                                   }  
                                                   } 


        if( $('#Democracia').attr('checked') )    { if(datos=="")
                                                        {
                                                            datos=$('#Democracia').attr("id");}
                                                   else{
                                                            datos+=","+$('#Democracia').attr("id");
                                                   }  
                                                   }   


        if( $('#Algebra').attr('checked') )        { if(datos=="")
                                                        {
                                                            datos=$('#Algebra').attr("id");}
                                                   else{
                                                            datos+=","+$('#Algebra').attr("id");
                                                   }  
                                                   } 


        if( $('#Naturales').attr('checked') )     { if(datos=="")
                                                        {
                                                            datos=$('#Naturales').attr("id");}
                                                   else{
                                                            datos+=","+$('#Naturales').attr("id");
                                                   }  
                                                   } 


        alert(datos);

        if(nombre=="" ||direccion =="" || celular =="" ||telefono =="" )
        {
            $('.error').fadeIn(5000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(6000);
        }else {
            //var datos = new FormData(crearAlumno);
              datos= '&nombre='+nombre+'&direccion='+direccion+'&celular='+celular+'&telefono='+telefono+'&datos='+datos; 
            $.ajax({
                type: "POST",
                url: "Profesores/crearProfesor.php",
                data: datos,

                success: function (data) {
                    $('.error').fadeIn(1000).html(data);
                    $("#nombre").val('');
                    $("#direccion").val('');
                    $("#celular").val('');
                    $("#telefono").val('');
                }
            });

        }
        })
    })