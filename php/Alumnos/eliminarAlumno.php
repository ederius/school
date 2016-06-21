<?php
include '../class/Alumno.class.php';
$a=new Alumno();
extract($_POST);
$a->eliminarAlumno($id);

?>