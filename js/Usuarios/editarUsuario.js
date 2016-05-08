$(".editarUsuario").live("click", function(){

    $(this).parent("td").parent("tr").each(function (index) {
        $(this).children("td").eq(0).each(function (index2)
        {
            switch (index) {
                case 0:
                    id = $(this).text();
                    break;
            }
        });
    });

    Data='id='+id;
    $.ajax({
        type: "POST",
        url: "../plantillas/Usuarios/modalEditarUsuario.php",
        data: Data,
        success: function (data) {
            $('#modalEditarUsuario').openModal();
            $('.bodyModalEditarUsuario').fadeIn(1).html(data);

        }
    } );

});


$(".actualizarUsuario").live("click", function(){

    var usuario=$("#usuario").val();
    var contrasena=$("#contrasena").val();

    if(usuario=="" ||contrasena =="" )
    {
        $('.errorEditarAlumno').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
    }else {
        var  Data='idusuario='+id+'&usuario='+usuario+'&contrasena='+contrasena;

        $.ajax({
            type: "POST",
            url: "Usuarios/actualizarUsuario.php",
            data: Data,
            processData: false,
            success: function (data) {
               $('.errorEditarUsuario').fadeIn(1000).html(data).fadeOut(3000);
                $('tbody').load('../plantillas/Usuarios/buscarUsuario1.php');

            }
        });
    }
});