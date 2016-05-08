$(".eliminarUsuario").live("click", function(){

    $(this).parent("td").parent("tr").each(function (index) {
        $(this).children("td").eq(0).each(function (index2)
        {
            switch (index) {
                case 0:
                    id = $(this).text();
                    $('#modalEliminarUsuario').openModal();
                    break;
            }
        });
    });
    $(".confirmacionEliminarUsuario").live("click", function(){
    Data='id='+id;
    $.ajax({
        type: "POST",
        url: "Usuarios/eliminarUsuario.php",
        data: Data,
        success: function (data) {
            $('tbody').load('../plantillas/Usuarios/buscarUsuario1.php');
            $('#modalEliminarUsuario').closeModal();
           }
    } );

});
});

