$(document).on("ready",function () {

    $(".asignarTarea").live("click", function(){
        location.reload();
    })

    /* BUSCAR ALUMNOSSSS*/
    $(".guardarTarea").live("click", function(){

        var cursoTarea =$("#cursoTarea").val();
        var jornadaTarea =$("#jornadaTarea").val();
        var fecha =$(".datepicker").val();
        var titulo =$(".titulo").val();
        var editor =tinyMCE.activeEditor.getContent();
        if(cursoTarea=="" ||jornadaTarea =="" || fecha =="" || editor =="" || titulo=="")
        {
            $('.resultadoTareas').fadeIn(1000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(3000);
        }else {

        Data='cursoTarea='+cursoTarea+'&jornadaTarea='+jornadaTarea+'&fecha='+fecha+'&editor='+editor+'&titulo='+titulo;
        $.ajax({
            type:"POST",
            url: "Tareas/asignarTarea.php",
            data: Data,

            success: function(data) {
                $('.resultadoTareas').fadeIn(1).html(data);


            }
        })



    }


    })
})