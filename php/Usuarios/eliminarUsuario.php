<?php
include '../class/Usuario.class.php';
$a=new Usuario();
extract($_POST);
$a->eliminarUsuario($id);

?>