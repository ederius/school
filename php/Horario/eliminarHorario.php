<?php
  include("../class/Horario.class.php");
  extract($_POST);

$h= new Horario();
$f=$h->eliminarHorario($jornadaHorario,$horarioCursos);
