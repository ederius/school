<?php
include '../../php/class/Tareas.class.php';
extract($_POST);
$tareas=new Tareas();
$t=$tareas->eliminarTareas($id);
