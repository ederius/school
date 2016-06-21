<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Profesor.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
$p = new Profesor();

$profesores = $p->consultarProfesores();
?>

<h5>CREAR HORARIO</h5>

<h5 class="center">Horario de la mañana</h5>
<BR>
<div id="row">
           
            <select id="cursosAlumnos" >
                <option value="">Curso</option>
                <?php
                $cursos= $c->consultarCursos();
                foreach($cursos as $curso){
                    echo '<option value="'.$curso["idcurso"].'">'.$curso["nombreCurso"].'</option>';
                }

                ?>
             </select>
                <br>
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
                            <td class="center bordered" >
                           <select name="1-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';

                            }
                            ?>
                           
                        </tr>


                     <! - -    HORA NUMERO 2 - - ->
                        <tr>
                            <td class="center bordered">07:45 - 08:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="2-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';

                            }
                            ?>
                        </tr>    

                    <! - -    HORA NUMERO 3 - - ->
                        <tr>
                            <td class="center bordered">08:30 - 09:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="3-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';

                            }
                            ?>
                        </tr>


                    <! - -    HORA NUMERO 4 - - ->
                        <tr>
                            <td class="center bordered">09:15 - 10:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="4-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';
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
                            <td class="center bordered" >
                           <select name="6-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';
                            }
                            ?>
                        </tr>


                        <! - -    HORA NUMERO 7 - - ->
                        <tr>
                            <td class="center bordered">11:15 - 12:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="7-'.$e.'" class=" center browser-default select" >
                           <option value=""></option>';
                           
                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++) 
                                     { 
                                       echo "<option value=''>".$materias[$i]." - ".$profesor['nombreProfesor']."</option>";
                                   }

                                }
                            echo '
                            </select>
                            </td>';
                            }
                            ?>
                        </tr>


                    </tbody>
                </table>
                 
             </div>






</div>


 