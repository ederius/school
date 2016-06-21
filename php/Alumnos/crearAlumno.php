<?php
include '../class/Alumno.class.php';
extract($_POST);
$i= new Alumno;
$i->crearAlumno($tarjeta,$nombre,$direccion,$celular,$telefono,$sexo,$idcurso,$idjornada);
?>