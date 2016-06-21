$(document).on("ready", function() {
    $(".crearAlumno").live("click", function(){
        var tarjeta=$("#tarjeta").val();
        var nombre=$("#nombre").val();
        var direccion=$("#direccion").val();
        var celular=$("#celular").val();
        var sexo=$("#sexo").val();
        var curso=$("#idcurso").val();
        var jornada=$("#idjornada").val();


        if(tarjeta==""|| nombre=="" ||direccion =="" || celular =="" || sexo =="" || curso =="" || jornada=="")
        {
            $('.error').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {
            var datos = $( "form" ).serialize();

            $.ajax({
                type: "POST",
                url: "Alumnos/crearAlumno.php",
                data: datos,

                success: function (data) {
                    $('.error').fadeIn(1000).html(data).fadeOut(9000);
                    $("#tarjeta").val("");
                    $("#nombre").val('');
                    $("#direccion").val('');
                    $("#celular").val('');
                    $("#telefono").val('');
                     $("#sexo").val('');
                    $("#idcurso").val('');
                }
            });


        }
        })




    $(".AlumnoAcudiente").live("click", function(){

        var datos=""
            $.ajax({
                type: "POST",
                url: "Alumnos/ultimoAlumno.php",
                data: datos,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('.selectAcudiente').html(data)


                }
            });


    })











    $(".crearAcudiente").live("click", function(){
        var idAlumnoAcudiente=$("#idAlumnoAcudiente").val();
        var nombreAcudiente=$("#nombreAcudiente").val();
        var direccionAcudiente=$("#direccionAcudiente").val();
        var direccionAcudienteTrabajo=$("#direccionAcudienteTrabajo").val();
        var emailAcudiente=$("#emailAcudiente").val();
        var celularAcudiente=$("#celularAcudiente").val();


        if(idAlumnoAcudiente=="" || nombreAcudiente=="" || direccionAcudiente =="" || direccionAcudienteTrabajo =="" || emailAcudiente =="" || celularAcudiente =="" )
        {
            $('.errorAcudiente').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {
            var datos = new FormData(crearAcudiente);


            $.ajax({
                type: "POST",
                url: "Alumnos/crearAcudiente.php",
                data: datos,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('.errorAcudiente').fadeIn(1000).html(data);
                    $("#nombreAcudiente").val('');
                    $("#direccionAcudiente").val('');
                    $("#direccionAcudienteTrabajo").val('');
                    $("#celularAcudiente").val('');
                    $("#emailAcudiente").val('');
                    $("#telefonoAcudiente").val('');

                }
            });


        }
    })




    })