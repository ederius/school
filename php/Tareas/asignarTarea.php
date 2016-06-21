<?php
session_start();
include'../class/Tareas.class.php';
extract($_POST);
$n=new Tareas();

$n->asignarTareas($_SESSION["ididentidad"],$cursoTarea,$jornadaTarea,$fecha,$editor,$titulo);


?>