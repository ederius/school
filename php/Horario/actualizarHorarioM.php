<?php
  include("../class/Horario.class.php");
  extract($_POST);

$h= new Horario();
$f=$h->actualizarHorario($jornadaHorario,$horarioCursos,$f11,$f12,$f13,$f14,$f15,$f16,$f17,$f21,$f22,$f23,$f24,$f25,$f26,$f27,
$f31,$f32,$f33,$f34,$f35,$f36,$f37,$f41,$f42,$f43,$f44,$f45,$f46,$f47,
$f61,$f62,$f63,$f64,$f65,$f66,$f67,$f71,$f72,$f73,$f74,$f75,$f76,$f77);
