<?php
include '../class/Profesor.class.php';
$a=new Profesor();
extract($_POST);
$a->eliminarProfesor($id);

?>