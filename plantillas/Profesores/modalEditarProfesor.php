<?php
include '../../php/class/Materia.class.php';
include '../../php/class/Profesor.class.php';
extract($_POST);
$c=new Materia();
$a=new Profesor();
$r=$a->consultarProfesorporid($id);
foreach($r as $dato){}
?>
<div class="row">

    <form class="col s12 card" name="editarProfesor" id="editarProfesor">
        <div class="row card-content">
            <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix active"></i>
                <input name="nombre" id="nombre" type="text" value="<?php echo $dato['nombreProfesor'] ?>" class="validate">
                <label class="active" for="nombre">Nombre Completo</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-action-home prefix active"></i>
                <input name="direccion" id="direccion" type="tel" class="validate" value="<?php echo $dato['direccionProfesor'] ?>">
                <label class="active" for="direccion">Dirección</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-stay-current-portrait prefix active"></i>
                <input name="celular" id="celular" type="tel" class="validate" value="<?php echo $dato['celularProfesor'] ?>">
                <label class="active" for="celular">Celular</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-phone prefix active"></i>
                <input name="telefono" id="telefono" type="tel" class="validate" value="<?php echo $dato['telefonoProfesor'] ?>">
                <label class="active" for="telefono">Telefono</label>
            </div>

            <div class="input-field col s12">
                    <h5>Seleccionar Materia</h5>
                    <?php


                    $curso=$c->consultarMaterias();
                    foreach($curso as $cursos){
                    echo    '<p> 
                              <input type="checkbox" name="'.utf8_encode($cursos['nombreMateria']).'"  id="'.utf8_encode($cursos['nombreMateria']).'" />
                                <label for="'.utf8_encode($cursos['nombreMateria']).'">
                                    '.utf8_encode($cursos['nombreMateria']).'
                                </label>
                              </p>
                            ';


                    }

                        $materias=explode(',',$dato['materias']);
                        $e=count($materias);
                        for ($i=$e-1; $i >= 0 ; $i--) { 
                         
                        ?>
                            <script >
                               var  variable    = "#";
                                    variable   = "<?php echo $materias[$i];?>";

                                $("#"+variable).prop("checked", "checked");

                            </script>



                            <?php
                    }


                    ?>



            </div>
            <div class="error center center-align"></div>
        </div>

    </form>

</div>
<div class="errorEditarProfesor  center center-align"></div>

<script>
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
   

</script>

