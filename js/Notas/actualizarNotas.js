$(document).on("ready",function () {

    /*                       PRIMER PERIODO                      */

    $("#cursosAlumnosPP").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosPP").val();
        var idjornada =$("#jornadaPP").val();
        var busqueda =$("#busquedaAlumnoPP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaPP").live("change", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosPP").val();
        var idjornada =$("#jornadaPP").val();
        var busqueda =$("#busquedaAlumnoPP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumnoPP").live("keyup", function(){
        var periodo=1
        var idcurso =$("#cursosAlumnosPP").val();
        var idjornada =$("#jornadaPP").val();
        var busqueda =$("#busquedaAlumnoPP").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoPrimerP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas12").live("click", function(){
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
        var periodo=1
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/actualizarTablaNotasPP.php", {grado:nombreCurso, idalumno:idAlumno, periodo:periodo})
        $(".actualizarNotasPP").live("click", function(){


            var notaMatematicas = $("#notaMatematicas").val()
            var descripMatematicas = $("#descripMatematicas").val()
            var notaEstadistica = $("#notaEstadistica").val()
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


            if (notaMatematicas      == undefined){  notaMatematicas = 0; }
            if (notaEstadistica      == undefined){  notaEstadistica = 0; }
            if (notaGeografia        == undefined){  notaGeografia = 0; }
            if (notaGeometria        == undefined){  notaGeometria = 0; }
            if (descripGeometria     == undefined){  descripGeometria = 0; }
            if (notaHistoria         == undefined){  notaHistoria = 0; }
            if (notaEspanol          == undefined){  notaEspanol = 0; }
            if (notaIngles           == undefined){  notaIngles = 0; }
            if (notaInformatica      == undefined){  notaInformatica = 0; }
            if (notaArte             == undefined){  notaArte = 0; }
            if (notaUrbanidad        == undefined){  notaUrbanidad = 0; }
            if (notaDeportes         == undefined){  notaDeportes = 0; }
            if (notaEtica            == undefined){  notaEtica = 0; }
            if (notaBiologia         == undefined){  notaBiologia = 0; }
            if (notaQuimica          == undefined){  notaQuimica = 0; }
            if (notaFisica           == undefined){  notaFisica = 0; }
            if (notaReligion         == undefined){  notaReligion = 0; }
            if (notaTrigonometria    == undefined){  notaTrigonometria = 0; }
            if (notaCienciasPoliticas== undefined){  notaCienciasPoliticas = 0; }
            if (notaEmprendimiento   == undefined){  notaEmprendimiento = 0; }
            if (notaDemocracia       == undefined){  notaDemocracia = 0; }
            if (notaAlgebra          == undefined){  notaAlgebra = 0; }
            if (notaNaturales        == undefined){  notaNaturales = 0; }



            var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                '&notaEstadistica=' + notaEstadistica + '&descripEstadistica=' + descripEstadistica +
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
                + '&idalumno=' + idAlumno + '&periodo=' + periodo
            $.ajax({
                type: "POST",
                url: "Notas/actualizarNotas.php",
                data: Datosform,
                success: function(data) {
                    if(data==1){
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Error al actualizar</div>').fadeOut(9000)

                    }
                    if(data==2){

                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas actualizadas</div>').fadeOut(9000)

                    }
                }
            })
        })
    });

    /*                       PRIMER PERIODO                      */






    /*                       SEGUNDO PERIODO                      */

    $("#cursosAlumnosSPA").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPA").val();
        var idjornada =$("#jornadaSPA").val();
        var busqueda =$("#busquedaAlumnoSPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaSPA").live("change", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPA").val();
        var idjornada =$("#jornadaSPA").val();
        var busqueda =$("#busquedaAlumnoSPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumnoSPA").live("keyup", function(){
        var periodo=2
        var idcurso =$("#cursosAlumnosSPA").val();
        var idjornada =$("#jornadaSPA").val();
        var busqueda =$("#busquedaAlumnoSPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoSP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas22").live("click", function(){
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
        var periodo=2
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/actualizarTablaNotasSP.php", {grado:nombreCurso, idalumno:idAlumno, periodo:periodo})
        $(".actualizarNotasSP").live("click", function(){


            var notaMatematicas = $("#notaMatematicas").val()
            var descripMatematicas = $("#descripMatematicas").val()
            var notaEstadistica = $("#notaEstadistica").val()
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


            if (notaMatematicas      == undefined){  notaMatematicas = 0; }
            if (notaEstadistica      == undefined){  notaEstadistica = 0; }
            if (notaGeografia        == undefined){  notaGeografia = 0; }
            if (notaGeometria        == undefined){  notaGeometria = 0; }
            if (descripGeometria     == undefined){  descripGeometria = 0; }
            if (notaHistoria         == undefined){  notaHistoria = 0; }
            if (notaEspanol          == undefined){  notaEspanol = 0; }
            if (notaIngles           == undefined){  notaIngles = 0; }
            if (notaInformatica      == undefined){  notaInformatica = 0; }
            if (notaArte             == undefined){  notaArte = 0; }
            if (notaUrbanidad        == undefined){  notaUrbanidad = 0; }
            if (notaDeportes         == undefined){  notaDeportes = 0; }
            if (notaEtica            == undefined){  notaEtica = 0; }
            if (notaBiologia         == undefined){  notaBiologia = 0; }
            if (notaQuimica          == undefined){  notaQuimica = 0; }
            if (notaFisica           == undefined){  notaFisica = 0; }
            if (notaReligion         == undefined){  notaReligion = 0; }
            if (notaTrigonometria    == undefined){  notaTrigonometria = 0; }
            if (notaCienciasPoliticas== undefined){  notaCienciasPoliticas = 0; }
            if (notaEmprendimiento   == undefined){  notaEmprendimiento = 0; }
            if (notaDemocracia       == undefined){  notaDemocracia = 0; }
            if (notaAlgebra          == undefined){  notaAlgebra = 0; }
            if (notaNaturales        == undefined){  notaNaturales = 0; }



            var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                '&notaEstadistica=' + notaEstadistica + '&descripEstadistica=' + descripEstadistica +
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
                + '&idalumno=' + idAlumno + '&periodo=' + periodo
            $.ajax({
                type: "POST",
                url: "Notas/actualizarNotas.php",
                data: Datosform,
                success: function(data) {
                    if(data==1){
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Error al actualizar</div>').fadeOut(9000)

                    }
                    if(data==2){

                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas actualizadas</div>').fadeOut(9000)

                    }
                }
            })
        })
    });

    /*                       SEGUNDO PERIODO                      */




    /*                       TERCER PERIODO                      */

    $("#cursosAlumnosTPA").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPA").val();
        var idjornada =$("#jornadaTPA").val();
        var busqueda =$("#busquedaAlumnoTPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaTPA").live("change", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPA").val();
        var idjornada =$("#jornadaTPA").val();
        var busqueda =$("#busquedaAlumnoTPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumnoTPA").live("keyup", function(){
        var periodo=3
        var idcurso =$("#cursosAlumnosTPA").val();
        var idjornada =$("#jornadaTPA").val();
        var busqueda =$("#busquedaAlumnoTPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoTP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas32").live("click", function(){
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
        var periodo=3
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/actualizarTablaNotasTP.php", {grado:nombreCurso, idalumno:idAlumno, periodo:periodo})
        $(".actualizarNotasTP").live("click", function(){


            var notaMatematicas = $("#notaMatematicas").val()
            var descripMatematicas = $("#descripMatematicas").val()
            var notaEstadistica = $("#notaEstadistica").val()
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


            if (notaMatematicas      == undefined){  notaMatematicas = 0; }
            if (notaEstadistica      == undefined){  notaEstadistica = 0; }
            if (notaGeografia        == undefined){  notaGeografia = 0; }
            if (notaGeometria        == undefined){  notaGeometria = 0; }
            if (descripGeometria     == undefined){  descripGeometria = 0; }
            if (notaHistoria         == undefined){  notaHistoria = 0; }
            if (notaEspanol          == undefined){  notaEspanol = 0; }
            if (notaIngles           == undefined){  notaIngles = 0; }
            if (notaInformatica      == undefined){  notaInformatica = 0; }
            if (notaArte             == undefined){  notaArte = 0; }
            if (notaUrbanidad        == undefined){  notaUrbanidad = 0; }
            if (notaDeportes         == undefined){  notaDeportes = 0; }
            if (notaEtica            == undefined){  notaEtica = 0; }
            if (notaBiologia         == undefined){  notaBiologia = 0; }
            if (notaQuimica          == undefined){  notaQuimica = 0; }
            if (notaFisica           == undefined){  notaFisica = 0; }
            if (notaReligion         == undefined){  notaReligion = 0; }
            if (notaTrigonometria    == undefined){  notaTrigonometria = 0; }
            if (notaCienciasPoliticas== undefined){  notaCienciasPoliticas = 0; }
            if (notaEmprendimiento   == undefined){  notaEmprendimiento = 0; }
            if (notaDemocracia       == undefined){  notaDemocracia = 0; }
            if (notaAlgebra          == undefined){  notaAlgebra = 0; }
            if (notaNaturales        == undefined){  notaNaturales = 0; }



            var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                '&notaEstadistica=' + notaEstadistica + '&descripEstadistica=' + descripEstadistica +
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
                + '&idalumno=' + idAlumno + '&periodo=' + periodo
            $.ajax({
                type: "POST",
                url: "Notas/actualizarNotas.php",
                data: Datosform,
                success: function(data) {
                    if(data==1){
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Error al actualizar</div>').fadeOut(9000)

                    }
                    if(data==2){

                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas actualizadas</div>').fadeOut(9000)

                    }
                }
            })
        })
    });
    /*                       TERCER PERIODO                      */



    /*                       CUARTO PERIODO                      */

    $("#cursosAlumnosCPA").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPA").val();
        var idjornada =$("#jornadaCPA").val();
        var busqueda =$("#busquedaAlumnoCPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });

    $("#jornadaCPA").live("change", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPA").val();
        var idjornada =$("#jornadaCPA").val();
        var busqueda =$("#busquedaAlumnoCPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });


// BUACAR ALUMNOS PARA NOTAS
    $("#busquedaAlumnoCPA").live("keyup", function(){
        var periodo=4
        var idcurso =$("#cursosAlumnosCPA").val();
        var idjornada =$("#jornadaCPA").val();
        var busqueda =$("#busquedaAlumnoCPA").val();
        Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Alumnos/actualizarAlumnosNotas.php",
            data: Data,

            success: function(data) {

                $('.resultadoCP').fadeIn(1).html(data);
            }
        });
    });
// BUACAR ALUMNOS PARA NOTAS


    // BUACAR ALUMNOS PARA NOTAS
    $(".verNotas42").live("click", function(){
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
        var periodo=4
        $('#modalNotas').openModal();
        $(".tablaNotas").load("../plantillas/Notas/actualizarTablaNotasCP.php", {grado:nombreCurso, idalumno:idAlumno, periodo:periodo})
        $(".actualizarNotasCP").live("click", function(){


            var notaMatematicas = $("#notaMatematicas").val()
            var descripMatematicas = $("#descripMatematicas").val()
            var notaEstadistica = $("#notaEstadistica").val()
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


            if (notaMatematicas      == undefined){  notaMatematicas = 0; }
            if (notaEstadistica      == undefined){  notaEstadistica = 0; }
            if (notaGeografia        == undefined){  notaGeografia = 0; }
            if (notaGeometria        == undefined){  notaGeometria = 0; }
            if (descripGeometria     == undefined){  descripGeometria = 0; }
            if (notaHistoria         == undefined){  notaHistoria = 0; }
            if (notaEspanol          == undefined){  notaEspanol = 0; }
            if (notaIngles           == undefined){  notaIngles = 0; }
            if (notaInformatica      == undefined){  notaInformatica = 0; }
            if (notaArte             == undefined){  notaArte = 0; }
            if (notaUrbanidad        == undefined){  notaUrbanidad = 0; }
            if (notaDeportes         == undefined){  notaDeportes = 0; }
            if (notaEtica            == undefined){  notaEtica = 0; }
            if (notaBiologia         == undefined){  notaBiologia = 0; }
            if (notaQuimica          == undefined){  notaQuimica = 0; }
            if (notaFisica           == undefined){  notaFisica = 0; }
            if (notaReligion         == undefined){  notaReligion = 0; }
            if (notaTrigonometria    == undefined){  notaTrigonometria = 0; }
            if (notaCienciasPoliticas== undefined){  notaCienciasPoliticas = 0; }
            if (notaEmprendimiento   == undefined){  notaEmprendimiento = 0; }
            if (notaDemocracia       == undefined){  notaDemocracia = 0; }
            if (notaAlgebra          == undefined){  notaAlgebra = 0; }
            if (notaNaturales        == undefined){  notaNaturales = 0; }



            var Datosform = 'notaMatematicas=' + notaMatematicas + '&descripMatematicas=' + descripMatematicas +
                '&notaEstadistica=' + notaEstadistica + '&descripEstadistica=' + descripEstadistica +
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
                + '&idalumno=' + idAlumno + '&periodo=' + periodo
            $.ajax({
                type: "POST",
                url: "Notas/actualizarNotas.php",
                data: Datosform,
                success: function(data) {
                    if(data==1){
                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center red white-text btn">Error al actualizar</div>').fadeOut(9000)

                    }
                    if(data==2){

                        $('.resultado-consulta-p1').fadeIn(1).html('<div class="center-aligner center blue white-text btn">Notas actualizadas</div>').fadeOut(9000)

                    }
                }
            })
        })
    });

    /*                       CUARTO PERIODO                      */

})