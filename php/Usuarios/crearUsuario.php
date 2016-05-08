<?php
include '../class/Usuario.class.php';
extract($_POST);
$u=new Usuario();
$u->crearUsuario($usuario,$contrasena,$tipo,$ididentificacion);




