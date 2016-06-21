<?php
/**
 * Created by PhpStorm.
 * Date: 22/10/15
 * Time: 09:52 PM
 */

require 'class/Alumno.class.php';
extract($_POST);
$c=new Alumno();
$c->inicio_sesion($tipo,$usuario,$contra);