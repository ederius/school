$(document).on("ready", function() {
    $(".mailporCurso").live("click", function () {

        var idCurso=$("#mailCurso").val();
        var asuntoxcurso=$("#asuntoxcurso").val();
        var mensajeAcudientexCurso=$("#mensajeAcudientexCurso").val();

        if(idCurso=="" || asuntoxcurso=="" || mensajeAcudientexCurso =="" )
        {
            $('.resultadoMailporCurso').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

           var Data='idCurso='+idCurso+'&asuntoxcurso='+asuntoxcurso+'&mensajeAcudientexCurso='+mensajeAcudientexCurso
        $.ajax({
            type: "POST",
            url: "Notificaciones/mailporCurso.php",
            data: Data,

            success: function (data) {
                $('.resultadoMailporCurso').fadeIn(1000).html(data)
            }
        });
        }
    })



    $(".mailJornada").live("click", function () {

        var jornada=$("#jornada").val();
        var asuntoxjornada=$("#asuntoxjornada").val();
        var mensajeAcudientexJornada=$("#mensajeAcudientexJornada").val();

        if(jornada=="" || asuntoxjornada=="" || mensajeAcudientexJornada =="" )
        {
            $('.resultadoMailporJornada').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

            var Data='jornada='+jornada+'&asuntoxjornada='+asuntoxjornada+'&mensajeAcudientexJornada='+mensajeAcudientexJornada
            $.ajax({
                type: "POST",
                url: "Notificaciones/mailporJornada.php",
                data: Data,

                success: function (data) {
                    $('.resultadoMailporJornada').fadeIn(1000).html(data)
                }
            });
        }
    })



    $(".buttonmailxtodos").live("click", function () {

        var asuntoxtodos=$("#asuntoxtodos").val();
        var mensajeAcudientextodos=$("#mensajeAcudientextodos").val();

        if(mensajeAcudientextodos =="" || asuntoxtodos=="")
        {
            $('.resultadoxtodos').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

            var Data='asuntoxtodos='+asuntoxtodos+'&mensajeAcudientextodos='+mensajeAcudientextodos
            $.ajax({
                type: "POST",
                url: "Notificaciones/mailxTodos.php",
                data: Data,

                success: function (data) {
                    $('.resultadoxtodos').fadeIn(1000).html(data)
                }
            });
        }
    })


})
