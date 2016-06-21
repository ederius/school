$(document).on("ready",function () {

    $("#busquedaUsuario").live("keyup ", function(){
        var valor1 =$("#tipoUsuario1").val();
        var valor =$("#busquedaUsuario").val();
        if(valor1=="" || valor == "")
        {
            $('.campovacio').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(2000);
        }
        else  {
            Data = 'valor=' + valor+'&valor1=' + valor1;
            $.ajax({
                type: "POST",
                url: "../plantillas/Usuarios/buscarUsuario1.php",
                data: Data,
                success: function (data) {
                    $('tbody').fadeIn(1).html(data);
                }
            });
        }
    });

    })