<?php

include '../../php/class/Materia.class.php';
$c=new Materia();
?>
<div class="row">
    <h5> Nuevo Profesor</h5>
    <form class="col s12 card" name="crearAlumno" id="crearAlumno">
        <div class="row card-content">
            <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <input name="nombre" id="nombre" type="text" class="validate">
                <label for="nombre">Nombre Completo</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-action-home prefix"></i>
                <input name="direccion" id="direccion" type="tel" class="validate">
                <label for="direccion">Dirección</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-stay-current-portrait prefix"></i>
                <input name="celular" id="celular" type="tel" class="validate">
                <label for="celular">Celular</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-phone prefix"></i>
                <input name="telefono" id="telefono" type="tel" class="validate">
                <label for="telefono">Telefono</label>
            </div>

                <br><br>
            <div class="col s12">
                    <h5>Seleccione la(s) materias que dictara el profesor</h4>
                    <?php

                    $curso=$c->consultarMaterias();
                    foreach($curso as $cursos){
                        echo' <p> 
                              <input type="checkbox" name="'.utf8_encode($cursos['nombreMateria']).'"  id="'.utf8_encode($cursos['nombreMateria']).'" />
                                <label for="'.utf8_encode($cursos['nombreMateria']).'">
                                    '.utf8_encode($cursos['nombreMateria']).'
                                </label>
                            </p>
                        ';
                    }

                    ?>

            </div>


            <div class="error center center-align"></div>
        </div>
        <a class="waves-effect waves-light btn right crearProfesor"><i class="mdi-social-person-add center white-text"></i></a>
    </form>

</div>

<script>

        $('select').material_select();
        $('.tooltipped').tooltip({delay: 50});



</script>