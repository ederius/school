<?php
include("../class/Horario.class.php");
  extract($_POST);
  $h= new Horario();
  $H = $h->consultarEstadoHorario($curso,$jornada);
echo $H;
