$(".editarProfesor").live("click", function(){

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
        url: "../plantillas/Profesores/modalEditarProfesor.php",
        data: Data,
        success: function (data) {
            $('#modalEditarProfesor').openModal();
            $('.bodyModalEditarProfesor').fadeIn(1).html(data);

        }
    } );

});


$(".actualizarProfesor").live("click", function(){

    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var celular=$("#celular").val();
    var telefono=$("#telefono").val();
    var curso=$("#idmateria").val();
    if(nombre=="" ||direccion =="" || celular =="" ||telefono =="" || curso =="")
    {
        $('.errorEditarProfesor').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
    }else {
        var  Data='idprofesor='+id+'&nombre='+nombre+'&direccion='+direccion+'&celular='+celular+'&telefono='+telefono+'&idmateria='+curso;

        $.ajax({
            type: "POST",
            url: "Profesores/actualizarProfesor.php",
            data: Data,
            processData: false,
            success: function (data) {
               $('.errorEditarProfesor').fadeIn(1000).html(data).fadeOut(3000);
                $('tbody').load('../plantillas/Profesores/buscarProfesor1.php');

            }
        });
    }
});