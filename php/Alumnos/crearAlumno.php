<?php
include '../class/Alumno.class.php';
extract($_POST);
$i= new Alumno;
$i->crearAlumno($nombre,$direccion,$celular,$telefono,$idcurso,$idjornada);
?>