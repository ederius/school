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

<h5 class="center">Horario de la tarde</h5>
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
    

                        <! - -    HORA NUMERO 8 - - ->
                        <tr>
                            <td class="center bordered">12:00 - 13:45</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="8-'.$e.'" class=" center browser-default select" >
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
                       <! - -    HORA NUMERO 9 - - ->
                        <tr>
                            <td class="center bordered">13:45 - 14:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="9-'.$e.'" class=" center browser-default select" >
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
                        <! - -    HORA NUMERO 10 - - ->
                        <tr>
                            <td class="center bordered">14:30 - 15:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="10-'.$e.'" class=" center browser-default select" >
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
                       <! - -    HORA NUMERO 11 - - ->
                        <tr>
                            <td class="center bordered">15:15 - 16:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="11-'.$e.'" class=" center browser-default select" >
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

                        <! - -    HORA NUMERO 12 - - ->
                        <tr class="green lighten-5">
                            <td class="center bordered">16:00 - 16:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                      
                            </td>';
                            }
                            ?>
                        </tr>
                       <! - -    HORA NUMERO 13 - - ->
                        <tr>
                            <td class="center bordered">16:30 - 17:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="13-'.$e.'" class=" center browser-default select" >
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

                                               <! - -    HORA NUMERO 14 - - ->
                        <tr>
                            <td class="center bordered">17:15 - 18:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="14-'.$e.'" class=" center browser-default select" >
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


 