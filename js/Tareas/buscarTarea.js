$(document).on("ready",function () {

    /* BUSCAR tareas*/
    $(".buscarTareas").live("click", function(){

        var fechaInicio =$(".fechaInicio").val();
        var fechaTope =$(".fechaTope").val();

        if(fechaInicio=="" ||fechaTope =="")
        {
            $('.tablaTareas').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

            Data='fechaInicio='+fechaInicio+'&fechaTope='+fechaTope;
            $.ajax({
                type:"POST",
                url: "../plantillas/Tareas/buscarTareas.php",
                data: Data,

                success: function(data) {
                    $('.tablaTareas').fadeIn(1).html(data);


                }
            })
        }
    });
  });


/////////////////////BUSCA LAS TAREAS PARA ELKIMINARLAS
    $(".buscarTareasProfe").live("click", function(){

        var fechaInicio =$(".fechaInicio").val();
        var fechaTope =$(".fechaTope").val();

        if(fechaInicio=="" ||fechaTope =="")
        {
            $('.tablaTareas').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

            Data='fechaInicio='+fechaInicio+'&fechaTope='+fechaTope;
            $.ajax({
                type:"POST",
                url: "../plantillas/Tareas/eliminarTareas.php",
                data: Data,

                success: function(data) {
                    $('.tablaTareas').fadeIn(1).html(data);

                }
            })
        }
    })



/////////////////DESCARGAR LA TAREA
    $(".btnDescargarTarea").live("click", function(){
        var id=""
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

        window.open('Tareas/descargarTarea.php?id='+id,'_blank');

    });





///////////// LLAMA LA FUNCIOPN PARA ELIMINAR LA TAREA

    $(".btnEliminarTarea").live("click", function(){
        var id=""
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
        $("#modal1").openModal();
        $(".eliminarT").click(function(){
            Data='id='+id;
            $.ajax({
                  type:"POST",
                  url: "../php/Tareas/eliminarTareas.php",
                  data: Data,
                  success: function(data)
                  {
                    var fechaInicio =$(".fechaInicio").val();
                    var fechaTope =$(".fechaTope").val();
                    Data='fechaInicio='+fechaInicio+'&fechaTope='+fechaTope;
                    $.ajax({
                            type:"POST",
                            url: "../plantillas/Tareas/eliminarTareas.php",
                            data: Data,

                            success: function(data) {
                                $('.tablaTareas').fadeIn(1).html(data);

                              }
                        });
                }
              });
    });

});
