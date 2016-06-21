$(document).on("ready",function () {

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

    $("#cursosAlumnos").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnos").val();
        var idjornada =$("#jornada").val();
        var busqueda =$("#busquedaAlumno2").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornada").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnos").val();
        var idjornada =$("#jornada").val();
        var busqueda =$("#busquedaAlumno2").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2").live("keyup", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnos").val();
        var idjornada =$("#jornada").val();
        var busqueda =$("#busquedaAlumno2").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas1").live("click", function(){
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
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/tablaNotasPP.php", {grado:nombreCurso})
        $(".guardarNotasPP").live("click", function(){
            var periodo=1
            var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
            $.ajax({
                type: "POST",
                url: "Notas/crearNota.php",
                data: Data,
                success: function(data) {
                    if(data==1){
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Notas de periodo insertadas</div>').fadeOut(9000)

                    }
                    if(data==2){

                        // var Datosform = $("#NotasAlumno10").serialize();
                        var notaMatematicas = $("#notaMatematicas").val()
                        var descripMatematicas = $("#descripMatematicas").val()
                        var NotaEstadistica = $("#notaEstadistica").val()
                        var descripEstadistica = $("#descripEstadistica").val()
                        var notaGeografia = $("#notaGeografia").val()
                        var descripGeografia = $("#descripGeografia").val()
                        var notaGeometria = $("#notaGeometria").val()
                        var descripGeometria = $("#descripGeometria").val()
                        var notaHistoria = $("#notaHistoria").val()
                        var descripHistoria = $("#descripHistoria").val()
                        var notaEspanol = $("#notaEspanol").val()
                        var descripEspanol = $("#descripEspanol").val()
                        var notaIngles = $("#notaIngles").val()
                        var descripIngles = $("#descripIngles").val()
                        var notaInformatica = $("#notaInformatica").val()
                        var descripInformatica = $("#descripInformatica").val()
                        var notaArte = $("#notaArte").val()
                        var descripArte = $("#descripArte").val()
                        var notaUrbanidad = $("#notaUrbanidad").val()
                        var descripUrbanidad = $("#descripUrbanidad").val()
                        var notaDeportes = $("#notaDeportes").val()
                        var descripDeportes = $("#descripDeportes").val()
                        var notaEtica = $("#notaEtica").val()
                        var descripEtica = $("#descripEtica").val()
                        var notaBiologia = $("#notaBiologia").val()
                        var descripBiologia = $("#descripBiologia").val()
                        var notaQuimica = $("#notaQuimica").val()
                        var descripQuimica = $("#descripQuimica").val()
                        var notaFisica = $("#notaFisica").val()
                        var descripFisica = $("#descripFisica").val()
                        var notaReligion = $("#notaReligion").val()
                        var descripReligion = $("#descripReligion").val()
                        var notaTrigonometria = $("#notaTrigonometria").val()
                        var descripTrigonometria = $("#descripTrigonometria").val()
                        var notaCienciasPoliticas = $("#notaCienciasPoliticas").val()
                        var descripCienciasPoliticas = $("#descripCienciasPoliticas").val()
                        var notaEmprendimiento = $("#notaEmprendimiento").val()
                        var descripEmprendimiento = $("#descripEmprendimiento").val()
                        var notaDemocracia = $("#notaDemocracia").val()
                        var descripDemocracia = $("#descripDemocracia").val()
                        var notaAlgebra = $("#notaAlgebra").val()
                        var descripAlgebra = $("#descripAlgebra").val()
                        var notaNaturales = $("#notaNaturales").val()
                        var descripNaturales = $("#descripNaturales").val()


                        var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                            '&NotaEstadistica=' + NotaEstadistica + '&descripEstadistica=' + descripEstadistica +
                            '&notaGeografia=' + notaGeografia + '&descripGeografia=' + descripGeografia +
                            '&notaGeometria=' + notaGeometria + '&descripGeometria=' + descripGeometria +
                            '&notaHistoria=' + notaHistoria + '&descripHistoria=' + descripHistoria + '&notaEspanol=' + notaEspanol +
                            '&descripEspanol=' + descripEspanol + '&notaIngles=' + notaIngles + '&descripIngles=' + descripIngles +
                            '&notaInformatica=' + notaInformatica + '&descripInformatica=' + descripInformatica
                            + '&notaArte=' + notaArte + '&descripArte=' + descripArte
                            + '&notaUrbanidad=' + notaUrbanidad + '&descripUrbanidad=' + descripUrbanidad
                            + '&notaDeportes=' + notaDeportes + '&descripDeportes=' + descripDeportes
                            + '&notaEtica=' + notaEtica + '&descripEtica=' + descripEtica
                            + '&notaBiologia=' + notaBiologia + '&descripBiologia=' + descripBiologia
                            + '&notaQuimica=' + notaQuimica + '&descripQuimica=' + descripQuimica
                            + '&notaFisica=' + notaFisica + '&descripFisica=' + descripFisica
                            + '&notaReligion=' + notaReligion + '&descripReligion=' + descripReligion
                            + '&notaTrigonometria=' + notaTrigonometria + '&descripTrigonometria=' + descripTrigonometria
                            + '&notaCienciasPoliticas=' + notaCienciasPoliticas + '&descripCienciasPoliticas=' + descripCienciasPoliticas
                            + '&notaEmprendimiento=' + notaEmprendimiento + '&descripEmprendimiento=' + descripEmprendimiento
                            + '&notaDemocracia=' + notaDemocracia + '&descripDemocracia=' + descripDemocracia
                            + '&notaAlgebra=' + notaAlgebra + '&descripAlgebra=' + descripAlgebra
                            + '&notaNaturales=' + notaNaturales + '&descripNaturales=' + descripNaturales

                        $.ajax({
                            type: "POST",
                            url: "Notas/crearNotasxMaterias.php",
                            data: Datosform,


                            success: function (data) {
                                $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas Guardadas</div>').fadeOut(9000)

                            }
                        })
                    }
                }
            })
        })
    });

    /*                       PRIMER PERIODO                      */






    /*                       SEGUNDO PERIODO                      */

    $("#cursosAlumnosSP").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSP").val();
        var idjornada =$("#jornadaSP").val();
        var busqueda =$("#busquedaAlumno2SP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaSP").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSP").val();
        var idjornada =$("#jornadaSP").val();
        var busqueda =$("#busquedaAlumno2SP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2SP").live("keyup", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSP").val();
        var idjornada =$("#jornadaSP").val();
        var busqueda =$("#busquedaAlumno2SP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas2").live("click", function(){
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
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/tablaNotasSP.php", {grado:nombreCurso})
        $(".guardarNotasSP").live("click", function(){
            var periodo=2
            var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
            $.ajax({
                type: "POST",
                url: "Notas/crearNota.php",
                data: Data,
                success: function(data) {
                    if (data == 1) {
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Notas de periodo insertadas</div>').fadeOut(9000)

                    }
                    if (data == 2) {
                        // var Datosform = $("#NotasAlumno10").serialize();
                        var notaMatematicas = $("#notaMatematicas").val()
                        var descripMatematicas = $("#descripMatematicas").val()
                        var NotaEstadistica = $("#notaEstadistica").val()
                        var descripEstadistica = $("#descripEstadistica").val()
                        var notaGeografia = $("#notaGeografia").val()
                        var descripGeografia = $("#descripGeografia").val()
                        var notaGeometria = $("#notaGeometria").val()
                        var descripGeometria = $("#descripGeometria").val()
                        var notaHistoria = $("#notaHistoria").val()
                        var descripHistoria = $("#descripHistoria").val()
                        var notaEspanol = $("#notaEspanol").val()
                        var descripEspanol = $("#descripEspanol").val()
                        var notaIngles = $("#notaIngles").val()
                        var descripIngles = $("#descripIngles").val()
                        var notaInformatica = $("#notaInformatica").val()
                        var descripInformatica = $("#descripInformatica").val()
                        var notaArte = $("#notaArte").val()
                        var descripArte = $("#descripArte").val()
                        var notaUrbanidad = $("#notaUrbanidad").val()
                        var descripUrbanidad = $("#descripUrbanidad").val()
                        var notaDeportes = $("#notaDeportes").val()
                        var descripDeportes = $("#descripDeportes").val()
                        var notaEtica = $("#notaEtica").val()
                        var descripEtica = $("#descripEtica").val()
                        var notaBiologia = $("#notaBiologia").val()
                        var descripBiologia = $("#descripBiologia").val()
                        var notaQuimica = $("#notaQuimica").val()
                        var descripQuimica = $("#descripQuimica").val()
                        var notaFisica = $("#notaFisica").val()
                        var descripFisica = $("#descripFisica").val()
                        var notaReligion = $("#notaReligion").val()
                        var descripReligion = $("#descripReligion").val()
                        var notaTrigonometria = $("#notaTrigonometria").val()
                        var descripTrigonometria = $("#descripTrigonometria").val()
                        var notaCienciasPoliticas = $("#notaCienciasPoliticas").val()
                        var descripCienciasPoliticas = $("#descripCienciasPoliticas").val()
                        var notaEmprendimiento = $("#notaEmprendimiento").val()
                        var descripEmprendimiento = $("#descripEmprendimiento").val()
                        var notaDemocracia = $("#notaDemocracia").val()
                        var descripDemocracia = $("#descripDemocracia").val()
                        var notaAlgebra = $("#notaAlgebra").val()
                        var descripAlgebra = $("#descripAlgebra").val()
                        var notaNaturales = $("#notaNaturales").val()
                        var descripNaturales = $("#descripNaturales").val()


                        var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                            '&NotaEstadistica=' + NotaEstadistica + '&descripEstadistica=' + descripEstadistica +
                            '&notaGeografia=' + notaGeografia + '&descripGeografia=' + descripGeografia +
                            '&notaGeometria=' + notaGeometria + '&descripGeometria=' + descripGeometria +
                            '&notaHistoria=' + notaHistoria + '&descripHistoria=' + descripHistoria + '&notaEspanol=' + notaEspanol +
                            '&descripEspanol=' + descripEspanol + '&notaIngles=' + notaIngles + '&descripIngles=' + descripIngles +
                            '&notaInformatica=' + notaInformatica + '&descripInformatica=' + descripInformatica
                            + '&notaArte=' + notaArte + '&descripArte=' + descripArte
                            + '&notaUrbanidad=' + notaUrbanidad + '&descripUrbanidad=' + descripUrbanidad
                            + '&notaDeportes=' + notaDeportes + '&descripDeportes=' + descripDeportes
                            + '&notaEtica=' + notaEtica + '&descripEtica=' + descripEtica
                            + '&notaBiologia=' + notaBiologia + '&descripBiologia=' + descripBiologia
                            + '&notaQuimica=' + notaQuimica + '&descripQuimica=' + descripQuimica
                            + '&notaFisica=' + notaFisica + '&descripFisica=' + descripFisica
                            + '&notaReligion=' + notaReligion + '&descripReligion=' + descripReligion
                            + '&notaTrigonometria=' + notaTrigonometria + '&descripTrigonometria=' + descripTrigonometria
                            + '&notaCienciasPoliticas=' + notaCienciasPoliticas + '&descripCienciasPoliticas=' + descripCienciasPoliticas
                            + '&notaEmprendimiento=' + notaEmprendimiento + '&descripEmprendimiento=' + descripEmprendimiento
                            + '&notaDemocracia=' + notaDemocracia + '&descripDemocracia=' + descripDemocracia
                            + '&notaAlgebra=' + notaAlgebra + '&descripAlgebra=' + descripAlgebra
                            + '&notaNaturales=' + notaNaturales + '&descripNaturales=' + descripNaturales


                        $.ajax({
                            type: "POST",
                            url: "Notas/crearNotasxMaterias.php",
                            data: Datosform,


                            success: function (data) {

                                $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas Guardadas</div>').fadeOut(9000)
                            }
                        })

                    }
                }
            })


        })

    });

    /*                       SEGUNDO PERIODO                      */




    /*                       TERCER PERIODO                      */

    $("#cursosAlumnosTP").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTP").val();
        var idjornada =$("#jornadaTP").val();
        var busqueda =$("#busquedaAlumno2TP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaTP").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTP").val();
        var idjornada =$("#jornadaTP").val();
        var busqueda =$("#busquedaAlumno2TP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2TP").live("keyup", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTP").val();
        var idjornada =$("#jornadaTP").val();
        var busqueda =$("#busquedaAlumno2TP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas3").live("click", function(){
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
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/tablaNotasTP.php", {grado:nombreCurso})
        $(".guardarNotasTP").live("click", function(){
            var periodo=3
            var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
            $.ajax({
                type: "POST",
                url: "Notas/crearNota.php",
                data: Data,
                success: function(data) {
                    if (data == 1) {
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Notas de periodo insertadas</div>').fadeOut(9000)

                    }
                    if (data == 2) {
                        // var Datosform = $("#NotasAlumno10").serialize();
                        var notaMatematicas = $("#notaMatematicas").val()
                        var descripMatematicas = $("#descripMatematicas").val()
                        var NotaEstadistica = $("#notaEstadistica").val()
                        var descripEstadistica = $("#descripEstadistica").val()
                        var notaGeografia = $("#notaGeografia").val()
                        var descripGeografia = $("#descripGeografia").val()
                        var notaGeometria = $("#notaGeometria").val()
                        var descripGeometria = $("#descripGeometria").val()
                        var notaHistoria = $("#notaHistoria").val()
                        var descripHistoria = $("#descripHistoria").val()
                        var notaEspanol = $("#notaEspanol").val()
                        var descripEspanol = $("#descripEspanol").val()
                        var notaIngles = $("#notaIngles").val()
                        var descripIngles = $("#descripIngles").val()
                        var notaInformatica = $("#notaInformatica").val()
                        var descripInformatica = $("#descripInformatica").val()
                        var notaArte = $("#notaArte").val()
                        var descripArte = $("#descripArte").val()
                        var notaUrbanidad = $("#notaUrbanidad").val()
                        var descripUrbanidad = $("#descripUrbanidad").val()
                        var notaDeportes = $("#notaDeportes").val()
                        var descripDeportes = $("#descripDeportes").val()
                        var notaEtica = $("#notaEtica").val()
                        var descripEtica = $("#descripEtica").val()
                        var notaBiologia = $("#notaBiologia").val()
                        var descripBiologia = $("#descripBiologia").val()
                        var notaQuimica = $("#notaQuimica").val()
                        var descripQuimica = $("#descripQuimica").val()
                        var notaFisica = $("#notaFisica").val()
                        var descripFisica = $("#descripFisica").val()
                        var notaReligion = $("#notaReligion").val()
                        var descripReligion = $("#descripReligion").val()
                        var notaTrigonometria = $("#notaTrigonometria").val()
                        var descripTrigonometria = $("#descripTrigonometria").val()
                        var notaCienciasPoliticas = $("#notaCienciasPoliticas").val()
                        var descripCienciasPoliticas = $("#descripCienciasPoliticas").val()
                        var notaEmprendimiento = $("#notaEmprendimiento").val()
                        var descripEmprendimiento = $("#descripEmprendimiento").val()
                        var notaDemocracia = $("#notaDemocracia").val()
                        var descripDemocracia = $("#descripDemocracia").val()
                        var notaAlgebra = $("#notaAlgebra").val()
                        var descripAlgebra = $("#descripAlgebra").val()
                        var notaNaturales = $("#notaNaturales").val()
                        var descripNaturales = $("#descripNaturales").val()


                        var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                            '&NotaEstadistica=' + NotaEstadistica + '&descripEstadistica=' + descripEstadistica +
                            '&notaGeografia=' + notaGeografia + '&descripGeografia=' + descripGeografia +
                            '&notaGeometria=' + notaGeometria + '&descripGeometria=' + descripGeometria +
                            '&notaHistoria=' + notaHistoria + '&descripHistoria=' + descripHistoria + '&notaEspanol=' + notaEspanol +
                            '&descripEspanol=' + descripEspanol + '&notaIngles=' + notaIngles + '&descripIngles=' + descripIngles +
                            '&notaInformatica=' + notaInformatica + '&descripInformatica=' + descripInformatica
                            + '&notaArte=' + notaArte + '&descripArte=' + descripArte
                            + '&notaUrbanidad=' + notaUrbanidad + '&descripUrbanidad=' + descripUrbanidad
                            + '&notaDeportes=' + notaDeportes + '&descripDeportes=' + descripDeportes
                            + '&notaEtica=' + notaEtica + '&descripEtica=' + descripEtica
                            + '&notaBiologia=' + notaBiologia + '&descripBiologia=' + descripBiologia
                            + '&notaQuimica=' + notaQuimica + '&descripQuimica=' + descripQuimica
                            + '&notaFisica=' + notaFisica + '&descripFisica=' + descripFisica
                            + '&notaReligion=' + notaReligion + '&descripReligion=' + descripReligion
                            + '&notaTrigonometria=' + notaTrigonometria + '&descripTrigonometria=' + descripTrigonometria
                            + '&notaCienciasPoliticas=' + notaCienciasPoliticas + '&descripCienciasPoliticas=' + descripCienciasPoliticas
                            + '&notaEmprendimiento=' + notaEmprendimiento + '&descripEmprendimiento=' + descripEmprendimiento
                            + '&notaDemocracia=' + notaDemocracia + '&descripDemocracia=' + descripDemocracia
                            + '&notaAlgebra=' + notaAlgebra + '&descripAlgebra=' + descripAlgebra
                            + '&notaNaturales=' + notaNaturales + '&descripNaturales=' + descripNaturales


                        $.ajax({
                            type: "POST",
                            url: "Notas/crearNotasxMaterias.php",
                            data: Datosform,


                            success: function (data) {

                                $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas Guardadas</div>').fadeOut(9000)
                            }
                        })

                    }
                }
            })


        })

    });

    /*                       TERCER PERIODO                      */



    /*                       CUARTO PERIODO                      */

    $("#cursosAlumnosCP").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCP").val();
        var idjornada =$("#jornadaCP").val();
        var busqueda =$("#busquedaAlumno2CP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaCP").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCP").val();
        var idjornada =$("#jornadaCP").val();
        var busqueda =$("#busquedaAlumno2CP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumno2CP").live("keyup", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCP").val();
        var idjornada =$("#jornadaCP").val();
        var busqueda =$("#busquedaAlumno2CP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/buscarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas4").live("click", function(){
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
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/tablaNotasCP.php", {grado:nombreCurso})
        $(".guardarNotasCP").live("click", function(){
            var periodo=4
            var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
            $.ajax({
                type: "POST",
                url: "Notas/crearNota.php",
                data: Data,
                success: function(data) {
                    if (data == 1) {
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Notas de periodo insertadas</div>').fadeOut(9000)

                    }
                    if (data == 2) {
                        // var Datosform = $("#NotasAlumno10").serialize();
                        var notaMatematicas = $("#notaMatematicas").val()
                        var descripMatematicas = $("#descripMatematicas").val()
                        var NotaEstadistica = $("#notaEstadistica").val()
                        var descripEstadistica = $("#descripEstadistica").val()
                        var notaGeografia = $("#notaGeografia").val()
                        var descripGeografia = $("#descripGeografia").val()
                        var notaGeometria = $("#notaGeometria").val()
                        var descripGeometria = $("#descripGeometria").val()
                        var notaHistoria = $("#notaHistoria").val()
                        var descripHistoria = $("#descripHistoria").val()
                        var notaEspanol = $("#notaEspanol").val()
                        var descripEspanol = $("#descripEspanol").val()
                        var notaIngles = $("#notaIngles").val()
                        var descripIngles = $("#descripIngles").val()
                        var notaInformatica = $("#notaInformatica").val()
                        var descripInformatica = $("#descripInformatica").val()
                        var notaArte = $("#notaArte").val()
                        var descripArte = $("#descripArte").val()
                        var notaUrbanidad = $("#notaUrbanidad").val()
                        var descripUrbanidad = $("#descripUrbanidad").val()
                        var notaDeportes = $("#notaDeportes").val()
                        var descripDeportes = $("#descripDeportes").val()
                        var notaEtica = $("#notaEtica").val()
                        var descripEtica = $("#descripEtica").val()
                        var notaBiologia = $("#notaBiologia").val()
                        var descripBiologia = $("#descripBiologia").val()
                        var notaQuimica = $("#notaQuimica").val()
                        var descripQuimica = $("#descripQuimica").val()
                        var notaFisica = $("#notaFisica").val()
                        var descripFisica = $("#descripFisica").val()
                        var notaReligion = $("#notaReligion").val()
                        var descripReligion = $("#descripReligion").val()
                        var notaTrigonometria = $("#notaTrigonometria").val()
                        var descripTrigonometria = $("#descripTrigonometria").val()
                        var notaCienciasPoliticas = $("#notaCienciasPoliticas").val()
                        var descripCienciasPoliticas = $("#descripCienciasPoliticas").val()
                        var notaEmprendimiento = $("#notaEmprendimiento").val()
                        var descripEmprendimiento = $("#descripEmprendimiento").val()
                        var notaDemocracia = $("#notaDemocracia").val()
                        var descripDemocracia = $("#descripDemocracia").val()
                        var notaAlgebra = $("#notaAlgebra").val()
                        var descripAlgebra = $("#descripAlgebra").val()
                        var notaNaturales = $("#notaNaturales").val()
                        var descripNaturales = $("#descripNaturales").val()


                        var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                            '&NotaEstadistica=' + NotaEstadistica + '&descripEstadistica=' + descripEstadistica +
                            '&notaGeografia=' + notaGeografia + '&descripGeografia=' + descripGeografia +
                            '&notaGeometria=' + notaGeometria + '&descripGeometria=' + descripGeometria +
                            '&notaHistoria=' + notaHistoria + '&descripHistoria=' + descripHistoria + '&notaEspanol=' + notaEspanol +
                            '&descripEspanol=' + descripEspanol + '&notaIngles=' + notaIngles + '&descripIngles=' + descripIngles +
                            '&notaInformatica=' + notaInformatica + '&descripInformatica=' + descripInformatica
                            + '&notaArte=' + notaArte + '&descripArte=' + descripArte
                            + '&notaUrbanidad=' + notaUrbanidad + '&descripUrbanidad=' + descripUrbanidad
                            + '&notaDeportes=' + notaDeportes + '&descripDeportes=' + descripDeportes
                            + '&notaEtica=' + notaEtica + '&descripEtica=' + descripEtica
                            + '&notaBiologia=' + notaBiologia + '&descripBiologia=' + descripBiologia
                            + '&notaQuimica=' + notaQuimica + '&descripQuimica=' + descripQuimica
                            + '&notaFisica=' + notaFisica + '&descripFisica=' + descripFisica
                            + '&notaReligion=' + notaReligion + '&descripReligion=' + descripReligion
                            + '&notaTrigonometria=' + notaTrigonometria + '&descripTrigonometria=' + descripTrigonometria
                            + '&notaCienciasPoliticas=' + notaCienciasPoliticas + '&descripCienciasPoliticas=' + descripCienciasPoliticas
                            + '&notaEmprendimiento=' + notaEmprendimiento + '&descripEmprendimiento=' + descripEmprendimiento
                            + '&notaDemocracia=' + notaDemocracia + '&descripDemocracia=' + descripDemocracia
                            + '&notaAlgebra=' + notaAlgebra + '&descripAlgebra=' + descripAlgebra
                            + '&notaNaturales=' + notaNaturales + '&descripNaturales=' + descripNaturales


                        $.ajax({
                            type: "POST",
                            url: "Notas/crearNotasxMaterias.php",
                            data: Datosform,


                            success: function (data) {

                                $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas Guardadas</div>').fadeOut(9000)
                            }
                        })

                    }
                }
            })


        })

    });

    /*                       CUARTO PERIODO                      */

})