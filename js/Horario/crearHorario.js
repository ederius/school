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
                        alert("Actualizar");
                        if (jornada=="1") {
                          $("#contenido").load("../plantillas/Horario/actualizarHorarioManana.php?jornada="+jornada+'&curso='+curso);
                        }else{
                          $("#contenido").load("../plantillas/Horario/actualizarHorarioTarde.php?jornada="+jornada+'&curso='+curso);
                        }
                  }else{
                      alert("Guardar");
                      if (jornada=="2") {
                        $("#contenido").load("../plantillas/Horario/crearHorarioTarde.php");
                      }else{
                        $("#contenido").load("../plantillas/Horario/crearHorarioManana.php");
                      }
                    }
                  }
                });
              }
            });


  $(".guardarHM").live("click", function(){
    var curso = $("#horarioCursos").val();
    var jornada = $("#jornadaHorario").val();
    var Data5;
    if (curso=="") {
      alert("Seleccione un curso!!");
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
    });




      $(".actualizarH").live("click", function(){
        var curso = $("#horarioCursos").val();
        var jornada = $("#jornadaHorario").val();
        var Data5;
        if (curso=="") {
          alert("Seleccione un curso!!");
        }else if (jornada=="") {
          alert("Seleccione una jornada!!");
        }
        else{
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
        });
