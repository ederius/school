$(".editarAlumno").live("click", function(){

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
        url: "../plantillas/Alumnos/modalEditarAlumno.php",
        data: Data,
        success: function (data) {
            $('#modalEditarAlumno').openModal();
            $('.bodyModalEditarAlumno').fadeIn(1).html(data);

        }
    } );

});


$(".actualizarAlumno").live("click", function(){

    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var celular=$("#celular").val();
    var telefono=$("#telefono").val();
    var curso=$("#idcurso").val();
    var idjornada =$("#idjornada").val();

    if(nombre=="" ||direccion =="" || celular =="" ||telefono =="" || curso =="" || idjornada =="")
    {
        $('.errorEditarAlumno').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
    }else {
        var  Data='idalumno='+id+'&nombre='+nombre+'&direccion='+direccion+'&celular='+celular+'&telefono='+telefono+'&idcurso='+curso+'&idjornada='+idjornada;

        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumno.php",
            data: Data,
            processData: false,
            success: function (data) {
               $('.errorEditarAlumno').fadeIn(1000).html(data);
                $('tbody').load('../plantillas/Alumnos/buscarAlumno1.php');

            }
        });
    }
});