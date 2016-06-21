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
    })

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
        alert(id);
        window.open('Tareas/descargarTarea.php?id='+id,'_blank');

    });


})