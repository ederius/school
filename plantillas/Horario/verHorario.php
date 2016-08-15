
<?php
session_start();
include '../../php/class/Alumno.class.php';
$a  = new Alumno();

$alu     = $a->consultarAlumnosporid($_SESSION['ididentidad']);
foreach ($alu as $alumno) {}
?>
<script type="text/javascript">
   var jornada ="";
   jornada=<?php echo $alumno["idjornada"] ?>;
   if (jornada==1) {
     $("#cargarDatos").load("../plantillas/Horario/verHorarioM.php");
   }else{
     $("#cargarDatos").load("../plantillas/Horario/verHorarioT.php");
   }
</script>
<div id="cargarDatos">

</div>
