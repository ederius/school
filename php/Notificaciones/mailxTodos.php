<?php
include'../class/Mail.class.php';
extract($_POST);
$m= new Mail();
$m->mailxtodos($asuntoxtodos,$mensajeAcudientextodos);