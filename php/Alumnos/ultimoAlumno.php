<?php
include '../../php/class/Alumno.class.php';
$a=new Alumno();
$alumnos=$a->consultarAlumnos();
echo '<select name="idAlumnoAcudiente" id="idAlumnoAcudiente">';


foreach($alumnos as $alumno){
    echo '<option value="'.$alumno["idalumno"].'" >'.utf8_encode($alumno['nombreAlumno']).'</option>
';
}
echo '</select>
<script>    $("select").material_select();
</script>
';

?>