<?php
include '../class/Alumno.class.php';
extract($_POST);
$a=new Alumno();
$a->actualizarAlumno($idalumno,$nombre,$direccion,$celular,$telefono,$idcurso,$idjornada);

?>