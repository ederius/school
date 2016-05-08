<?php
include '../class/Usuario.class.php';
extract($_POST);
$a=new Usuario();
$a->actualizarUsuario($idusuario,$usuario,$contrasena);

?>