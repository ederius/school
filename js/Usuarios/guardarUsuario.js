$(document).on("ready", function() {

    $("#tipo").live("change", function(){
        var roll=$("#tipo").val();
        datos='roll='+roll;
        $.ajax({
            type: "POST",
            url: "Usuarios/cargarUsuarios.php",
            data: datos,

            processData: false,
            success: function (data) {

                $('.seleccionUsuario').fadeIn(1).html(data);

            }
        });


    })


    $(".crearUsuario").live("click", function(){
        var roll=$("#roll").val();
        var ididentificacion=$("#ididentificacion").val();
        var usuario=$("#usuario").val();
        var contrasena=$("#contrasena").val();

        if(roll=="" ||ididentificacion =="" || usuario =="" ||contrasena =="" )
        {
            $('.error').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {
            var Datos = new FormData(crearUsuario);

            $.ajax({
                type: "POST",
                url: "Usuarios/crearUsuario.php",
                data: Datos,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('.error').fadeIn(1000).html(data).fadeOut(9000);


                }
            });

        }
        })
    })