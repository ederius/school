
/*                       PRIMER PERIODO                      */

$("#AlumnosProfesor").live("change", function(){
    var periodo=1
    var idcurso =$("#AlumnosProfesor").val();
    var idjornada =$("#jornadaProfesor").val();
    var busqueda =$("#busquedaAlumno2Profesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoPrimerP').fadeIn(1).html(data);
        }
    });
});

$("#jornadaProfesor").live("change", function(){
    var periodo=1
    var idcurso =$("#AlumnosProfesor").val();
    var idjornada =$("#jornadaProfesor").val();
    var busqueda =$("#busquedaAlumno2Profesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoPrimerP').fadeIn(1).html(data);
        }
    });
});


// BUACAR ALUMNOS PARA NOTAS
$("#busquedaAlumno2Profesor").live("keyup", function(){
    var periodo=1
    var idcurso =$("#AlumnosProfesor").val();
    var idjornada =$("#jornadaProfesor").val();
    var busqueda =$("#busquedaAlumno2Profesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
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
    var periodo=1

    $('#modalNotas').openModal();
    $(".tablaNotas").load("../plantillas/Notas/tablaNotasPPP.php", {grado:nombreCurso, periodo:periodo})
    $(".guardarNotas1").live("click", function(){

        var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;

        $.ajax({
            type: "POST",
            url: "Notas/crearNota.php",
            data: Data,
            success: function(data) {
                if(data==1){

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

$("#AlumnosSPProfesor").live("change", function(){
    var periodo=2
    var idcurso =$("#AlumnosSPProfesor").val();
    var idjornada =$("#jornadaSPProfesor").val();
    var busqueda =$("#busquedaAlumno2SPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoSPP').fadeIn(1).html(data);
        }
    });
});

$("#jornadaSPProfesor").live("change", function(){
    var periodo=2
    var idcurso =$("#AlumnosSPProfesor").val();
    var idjornada =$("#jornadaSPProfesor").val();
    var busqueda =$("#busquedaAlumno2SPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoSPP').fadeIn(1).html(data);
        }
    });
});


// BUACAR ALUMNOS PARA NOTAS
$("#busquedaAlumno2SPProfesor").live("keyup", function(){
    var periodo=2
    var idcurso =$("#AlumnosSPProfesor").val();
    var idjornada =$("#jornadaSPProfesor").val();
    var busqueda =$("#busquedaAlumno2SPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoSPP').fadeIn(1).html(data);
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
    var periodo=2

    $('#modalNotas').openModal();
    $(".tablaNotas").load("../plantillas/Notas/tablaNotasPPP.php", {grado:nombreCurso, periodo:periodo})
    $(".guardarNotas2").live("click", function(){
        var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Notas/crearNota.php",
            data: Data,
            success: function(data) {
                if(data==1){

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

/*                       SEGUNDO PERIODO                      */




/*                       TERCER PERIODO                      */

$("#AlumnosTPProfesor").live("change", function(){
    var periodo=3
    var idcurso =$("#AlumnosTPProfesor").val();
    var idjornada =$("#jornadaTPProfesor").val();
    var busqueda =$("#busquedaAlumno2TPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoTPP').fadeIn(1).html(data);
        }
    });
});

$("#jornadaTPProfesor").live("change", function(){
    var periodo=3
    var idcurso =$("#AlumnosTPProfesor").val();
    var idjornada =$("#jornadaTPProfesor").val();
    var busqueda =$("#busquedaAlumno2TPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoTPP').fadeIn(1).html(data);
        }
    });
});


// BUACAR ALUMNOS PARA NOTAS
$("#busquedaAlumno2TPProfesor").live("keyup", function(){
    var periodo=3
    var idcurso =$("#AlumnosTPProfesor").val();
    var idjornada =$("#jornadaTPProfesor").val();
    var busqueda =$("#busquedaAlumno2TPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoTPP').fadeIn(1).html(data);
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
    var periodo=3

    $('#modalNotas').openModal();
    $(".tablaNotas").load("../plantillas/Notas/tablaNotasPPP.php", {grado:nombreCurso, periodo:periodo})
    $(".guardarNotas3").live("click", function(){

        var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Notas/crearNota.php",
            data: Data,
            success: function(data) {
                if(data==1){

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

/*                       TERCER PERIODO                      */



/*                       CUARTO PERIODO                      */

$("#AlumnosCPProfesor").live("change", function(){
    var periodo=4
    var idcurso =$("#AlumnosCPProfesor").val();
    var idjornada =$("#jornadaCPProfesor").val();
    var busqueda =$("#busquedaAlumno2CPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {
            $('.resultadoCPP').fadeIn(1).html(data);
        }
    });
});

$("#jornadaCPProfesor").live("change", function(){
    var periodo=4
    var idcurso =$("#AlumnosCPProfesor").val();
    var idjornada =$("#jornadaCPProfesor").val();
    var busqueda =$("#busquedaAlumno2CPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoCPP').fadeIn(1).html(data);
        }
    });
});


// BUACAR ALUMNOS PARA NOTAS
$("#busquedaAlumno2CPProfesor").live("keyup", function(){
    var periodo=4
    var idcurso =$("#AlumnosCPProfesor").val();
    var idjornada =$("#jornadaCPProfesor").val();
    var busqueda =$("#busquedaAlumno2CPProfesor").val();
    Data='idcurso='+idcurso+'&idjornada='+idjornada+'&busqueda='+busqueda+'&periodo='+periodo;
    $.ajax({
        type: "POST",
        url: "Profesores/buscarAlumnosNotasP.php",
        data: Data,

        success: function(data) {

            $('.resultadoCPP').fadeIn(1).html(data);
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
    var periodo=4
    $('#modalNotas').openModal();
    $(".tablaNotas").load("../plantillas/Notas/tablaNotasPPP.php", {grado:nombreCurso, periodo:periodo})
    $(".guardarNotas4").live("click", function(){

        var Data = 'nombreCurso='+nombreCurso+'&idAlumno='+idAlumno+'&periodo='+periodo;
        $.ajax({
            type: "POST",
            url: "Notas/crearNota.php",
            data: Data,
            success: function(data) {
                if(data==1){

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

/*                       CUARTO PERIODO                      */
