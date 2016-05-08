$(document).on("ready",function () {

    $("#busquedaProfesor").live("keyup", function(){
        var valor =$("#busquedaProfesor").val();
        Data='valor='+valor;
        $.ajax({
            type: "POST",
            url: "../plantillas/Profesores/buscarProfesor1.php",
            data: Data,

            success: function(data) {

                $('tbody').fadeIn(1).html(data);
            }
        });
    });







    })

