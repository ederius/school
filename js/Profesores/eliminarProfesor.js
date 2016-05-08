$(".eliminarProfesor").live("click", function(){

    $(this).parent("td").parent("tr").each(function (index) {
        $(this).children("td").eq(0).each(function (index2)
        {
            switch (index) {
                case 0:
                    id = $(this).text();
                    $('#modalEliminarProfesor').openModal();
                    break;
            }
        });
    });
    $(".confirmacionEliminarProfesor").live("click", function(){
    Data='id='+id;
    $.ajax({
        type: "POST",
        url: "Profesores/eliminarProfesor.php",
        data: Data,
        success: function (data) {
            $('tbody').load('../plantillas/Profesores/buscarProfesor1.php');
            $('#modalEliminarProfesor').closeModal();
           }
    } );

});
});

