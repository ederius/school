  $("#jornadaHorario").change(function(){
      var curso = $("#horarioCursos").val();
      var jornada = $("#jornadaHorario").val();
      if (curso =="") {
        alert("Curso no seleccionado, selecione un curso para continuar!");
      }
      else if(jornada==""){
        alert("Jornada no seleccionada, selecione una jornada para continuar!");
      }else{
              var Datos="curso="+curso+"&jornada="+jornada;
              $.ajax({
                type: "POST",
                url: "../php/Horario/validarHorario.php",
                data:Datos,

                success: function(data) {
                  if (data == 1) {
                      alert("actualizar");

                    }
                    if(data == 2){
                      alert("Guardar");
                    }
                  }
                });
              }
            });




  $(".guardarHM").on("click", function(){
    var Data5;
    if (curso=="") {
      alert("Seleccione un curso!!");
    }
    else{
        $.ajax({
          type: "POST",
          url: "../php/Horario/validarHorarioM.php",
          data:"",

          success: function(data) {
            if (data == false) {
              Data5=$("form").serialize();
              $.ajax({
                  type: "POST",
                  url: "../php/Horario/actualizarHorarioM.php",
                  data: Data5,

                  success: function(data) {
                      $('#resultadoHorario').fadeIn(1).html(data);
                  }
              });

            }
            else{
                  Data5=$("form").serialize();
                  $.ajax({
                      type: "POST",
                      url: "../php/Horario/insertarHorarioM.php",
                      data: Data5,

                      success: function(data) {
                          $('#resultadoHorario').fadeIn(1).html(data);
                      }
                  });

                }
          }
        });
      }
  });
