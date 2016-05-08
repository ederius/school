$(document).on("ready",function () {

    /***************************************    DESCARGAR BOLETINES EN PANEL DE ESTUDIANTES  *************************/

    $(".BoletinPrimerPeriodo").live("click", function(){
        var periodo=1

        window.open('Boletines/generarBoletin2.php?periodo='+periodo,'_blank');
    });
    $(".BoletinSegundoPeriodo").live("click", function(){
        var periodo=2

        window.open('Boletines/generarBoletin2.php?periodo='+periodo,'_blank');
    });

    $(".BoletinTercerPeriodo").live("click", function(){
        var periodo=3

        window.open('Boletines/generarBoletin2.php?periodo='+periodo,'_blank');
    });


    $(".BoletinCuartoPeriodo").live("click", function(){
        var periodo=4

        window.open('Boletines/generarBoletin2.php?periodo='+periodo,'_blank');
    });







    /***************************************    DESCARGAR BOLETINES EN PANEL DE ESTUDIANTES  *************************/

    /* BUSCAR ALUMNOSSSS*/
    $("#busqueda").live("keyup", function(){
        var valor =$("#busqueda").val();
        Data5='valor='+valor;
        $.ajax({
            type: "POST",
            url: "../plantillas/Alumnos/buscarAlumno1.php",
            data: Data5,

            success: function(data) {
                $('tbody').fadeIn(1).html(data);
            }
        });
    });


    /* BUSCAR ALUMNOSSSS*/





    /*                       PRIMER PERIODO                      */

    $("#cursosAlumnosB").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosB").val();
        var idjornada =$("#jornadaB").val();
        var busqueda =$("#busquedaAlumno2B").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,
            success: function(data) {
                $('.resultadoPrimerPB').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaB").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosB").val();
        var idjornada =$("#jornadaB").val();
        var busqueda =$("#busquedaAlumno2B").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {
                $('.resultadoPrimerPB').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2B").live("keyup", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosB").val();
        var idjornada =$("#jornadaB").val();
        var busqueda =$("#busquedaAlumno2B").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {
                $('.resultadoPrimerPB').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".generarBoletin1").live("click", function(){
        var periodo=1

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        idAlumno = $(this).text();
                        break;
                }
            });
        });

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(1).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombre = $(this).text();
                        break;
                }
            });
        });

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(3).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombreCurso = $(this).text();
                        break;
                }
            });
        });

        window.open('Boletines/generarBoletin.php?id='+idAlumno+'&periodo='+periodo+'&nombreCurso='+nombreCurso+'&nombre='+nombre,'_blank');

    });

    /*                       PRIMER PERIODO                      */






    /*                       SEGUNDO PERIODO                      */

    $("#cursosAlumnosSPB").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPB").val();
        var idjornada =$("#jornadaSPB").val();
        var busqueda =$("#busquedaAlumno2SPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoSPB').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaSPB").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPB").val();
        var idjornada =$("#jornadaSPB").val();
        var busqueda =$("#busquedaAlumno2SPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoSPB').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2SPB").live("keyup", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPB").val();
        var idjornada =$("#jornadaSPB").val();
        var busqueda =$("#busquedaAlumno2SPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoSPB').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".generarBoletin2").live("click", function(){
        var periodo=2
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        idAlumno = $(this).text();
                        break;
                }
            });
        });

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(3).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombreCurso = $(this).text();
                        break;
                }
            });
        });
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(1).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombre = $(this).text();
                        break;
                }
            });
        });



        window.open('Boletines/generarBoletin.php?id='+idAlumno+'&periodo='+periodo+'&nombreCurso='+nombreCurso+'&nombre='+nombre,'_blank');

    });

    /*                       SEGUNDO PERIODO                      */




    /*                       TERCER PERIODO                      */

    $("#cursosAlumnosTPB").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPB").val();
        var idjornada =$("#jornadaTPB").val();
        var busqueda =$("#busquedaAlumno2TPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoTPB').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaTPB").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPB").val();
        var idjornada =$("#jornadaTPB").val();
        var busqueda =$("#busquedaAlumno2TPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoTPB').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2TPB").live("keyup", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPB").val();
        var idjornada =$("#jornadaTPB").val();
        var busqueda =$("#busquedaAlumno2TPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Boletines/buscarAlumnosBoletin.php",
            data: Data,

            success: function(data) {

                $('.resultadoTPB').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".generarBoletin3").live("click", function(){
        var periodo=3
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        idAlumno = $(this).text();
                        break;
                }
            });
        });

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(3).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombreCurso = $(this).text();
                        break;
                }
            });
        });
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(1).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombre = $(this).text();
                        break;
                }
            });
        });



        window.open('Boletines/generarBoletin.php?id='+idAlumno+'&periodo='+periodo+'&nombreCurso='+nombreCurso+'&nombre='+nombre,'_blank');

    });

    /*                       TERCER PERIODO                      */



    /*                       CUARTO PERIODO                      */

    $("#cursosAlumnosCPB").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPB").val();
        var idjornada =$("#jornadaCPB").val();
        var busqueda =$("#busquedaAlumno2CPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCPB').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaCPB").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPB").val();
        var idjornada =$("#jornadaCPB").val();
        var busqueda =$("#busquedaAlumno2CPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCPB').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2CPB").live("keyup", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPB").val();
        var idjornada =$("#jornadaCPB").val();
        var busqueda =$("#busquedaAlumno2CPB").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCPB').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".generarBoletin4").live("click", function(){
        var periodo=4
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        idAlumno = $(this).text();
                        break;
                }
            });
        });

        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(3).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombreCurso = $(this).text();
                        break;
                }
            });
        });
        $(this).parent("td").parent("tr").each(function (index) {
            $(this).children("td").eq(1).each(function (index2)
            {
                switch (index) {
                    case 0:
                        nombre = $(this).text();
                        break;
                }
            });
        });



        window.open('Boletines/generarBoletin.php?id='+idAlumno+'&periodo='+periodo+'&nombreCurso='+nombreCurso+'&nombre='+nombre,'_blank');

    });

    /*                       CUARTO PERIODO                      */

})