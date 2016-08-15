<?php
session_start();
include '../class/Usuario.class.php';
extract($_POST);
$i= new Usuario;
$i->validarContrasenaUsuario($contrasena,$_SESSION['idusuario']);
?>
