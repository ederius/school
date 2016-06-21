<?php
include '../class/Alumno.class.php';
extract($_POST);
$i= new Alumno;
$i->crearAcudiente($idAlumnoAcudiente,$nombreAcudiente,$direccionAcudiente,$direccionAcudienteTrabajo,$emailAcudiente,$celularAcudiente,$telefonoAcudiente);
?>