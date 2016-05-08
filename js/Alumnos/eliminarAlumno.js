$(".eliminarAlumno").live("click", function(){

    $(this).parent("td").parent("tr").each(function (index) {
        $(this).children("td").eq(0).each(function (index2)
        {
            switch (index) {
                case 0:
                    id = $(this).text();
                    $('#modalEliminarAlumno').openModal();
                    break;
            }
        });
    });
    $(".confirmacionEliminarAlumno").live("click", function(){
    Data='id='+id;
    $.ajax({
        type: "POST",
        url: "Alumnos/eliminarAlumno.php",
        data: Data,
        success: function (data) {
            $('tbody').load('../plantillas/Alumnos/buscarAlumno1.php');
            $('#modalEliminarAlumno').closeModal();
           }
    } );

});
});

