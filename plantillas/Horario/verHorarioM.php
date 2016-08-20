
<?php
session_start();
error_reporting(E_ALL);
include '../../php/class/Profesor.class.php';
include '../../php/class/Horario.class.php';
include '../../php/class/Alumno.class.php';
$a  = new Alumno();
$p  = new Profesor();
$h  = new Horario();
$alu     = $a->consultarAlumnosporid($_SESSION['ididentidad']);
foreach ($alu as $alumno) {}
$profesores = $p->consultarMateriaProfesor();
$r          = $h->consultarHorario($alumno["idjornada"], $alumno["idcurso"]);
?>
<br>
<h5 class="center">Horario de la ma&ntilde;ana</h5>
<BR>

  <form>

             <div class="col s12">
                <table>
                    <thead>
                        <tr class="center ">
                            <td class="center ">    <i class="mdi-action-schedule"></i></td>
                            <td class="center diasSemana">LUNES</td>
                            <td class="center diasSemana">MARTES</td>
                            <td class="center diasSemana">MIERCOLES</td>
                            <td class="center diasSemana">JUEVES</td>
                            <td class="center diasSemana">VIERNES</td>
                            <td class="center diasSemana">SABADO</td>
                            <td class="center diasSemana">DOMINGO</td>
                        </tr>
                    </thead>

                    <tbody>
                    <! - -    HORA NUMERO 1 - - ->
                        <tr>
                            <td class="center bordered">07:00 - 07:45</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f1".$e].'</td>';

                            }
                            ?>

                        </tr>


                     <! - -    HORA NUMERO 2 - - ->
                        <tr>
                            <td class="center bordered">07:45 - 08:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f2".$e].'</td>';

                            }
                            ?>
                        </tr>

                    <! - -    HORA NUMERO 3 - - ->
                        <tr>
                            <td class="center bordered">08:30 - 09:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f3".$e].'</td>';

                            }
                            ?>
                        </tr>


                    <! - -    HORA NUMERO 4 - - ->
                        <tr>
                            <td class="center bordered">09:15 - 10:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f4".$e].'</td>';
                            }
                            ?>
                        </tr>


                        <! - -    HORA NUMERO 5 - - ->
                        <tr class="green lighten-5">
                            <td class="center bordered green lighten-5">10:00 - 10:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >

                            </td>';
                            }
                            ?>
                        </tr>

                        <! - -    HORA NUMERO 6 - - ->
                        <tr>
                            <td class="center bordered">10:30 - 11:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f6".$e].'</td>';
                            }
                            ?>
                        </tr>


                        <! - -    HORA NUMERO 7 - - ->
                        <tr>
                            <td class="center bordered">11:15 - 12:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >'.$r["f7".$e].'</td>';
                            }
                            ?>
                        </tr>


                    </tbody>
                </table>

             </div>
