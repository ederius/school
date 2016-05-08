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
            
        
        if( $('#Matematicas').attr('checked') )  { Matematicas=$('.Matematicas').attr("id"); }
        if( $('#Estadistica').attr('checked') )  { Estadistica=$('.Estadistica').attr("id"); }
        if( $('#Geografia').attr('checked') )    { Geografia=$('.Geografia').attr("id"); }
        if( $('#Geometria').attr('checked') )    { Geometria=$('.Geometria').attr("id"); }
        if( $('#Historia').attr('checked') )     { Historia=$('.Historia').attr("id"); }
        if( $('#Espanol').attr('checked') )      { Espanol=$('.Espanol').attr("id"); }
        if( $('#Ingles').attr('checked') )       { Ingles=$('.Ingles').attr("id"); }
        if( $('#Informatica').attr('checked') )  { Informatica=$('.Informatica').attr("id"); }
        if( $('#Arte').attr('checked') )         { Arte=$('.Arte').attr("id"); }
        if( $('#Urbanidad').attr('checked') )    { Urbanidad=$('.Urbanidad').attr("id"); }
        if( $('#Deportes').attr('checked') )     { Deportes=$('.Deportes').attr("id"); }
        if( $('#Etica').attr('checked') )        { Etica=$('.Etica').attr("id"); }
        if( $('#Biologia').attr('checked') )     { Biologia=$('.Biologia').attr("id"); }
        if( $('#Quimica').attr('checked') )      { Quimica=$('.Quimica').attr("id"); }
        if( $('#Fisica').attr('checked') )              { Fisica=$('.Fisica').attr("id"); }
        if( $('#Religion').attr('checked') )            { Religion=$('.Religion').attr("id"); }
        if( $('#Trigonometria').attr('checked') )       { Trigonometria=$('.Trigonometria').attr("id"); }
        if( $('#CienciasPoliticas').attr('checked') )   { CienciasPoliticas=$('.CienciasPoliticas').attr("id"); }
        if( $('#Emprendimiento').attr('checked') )      { Emprendimiento=$('.Emprendimiento').attr("id"); }
        if( $('#Democracia').attr('checked') )          { Democracia=$('.Democracia').attr("id"); }
        if( $('#Algebra').attr('checked') )             { Algebra=$('.Algebra').attr("id"); }
        if( $('#Naturales').attr('checked') )           { Naturales=$('.Naturales').attr("id"); }
        

                    
        if(nombre=="" ||direccion =="" || celular =="" ||telefono =="" )
        {
            $('.error').fadeIn(5000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(6000);
        }else {
            //var datos = new FormData(crearAlumno);
              datos= '&nombre='+nombre+'&direccion='+direccion+'&celular='+celular+'&telefono='+telefono+'Matematicas='+Matematicas+'&Estadistica='+Estadistica+'&Geometria='+Geometria+'&Geografia='+Geografia+
              '&Historia='+Historia+'&Espanol='+Espanol+'&Ingles='+Ingles+'&Informatica='+Informatica+'&Arte='+Arte+
              '&Urbanidad='+Urbanidad+'&Deportes='+Deportes+'&Etica='+Etica+'&Fisica='+Fisica+'&Quimica='+Quimica+ 
              '&Biologia='+Biologia+'&Religion='+Religion+'&Trigonometria='+Trigonometria+'&CienciasPoliticas='+CienciasPoliticas+
              '&Emprendimiento='+Emprendimiento+'&Democracia='+Democracia+'&Algebra='+Algebra; 
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