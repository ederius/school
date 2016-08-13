<?php
include '../../php/class/Profesor.class.php';
include '../../php/class/Horario.class.php';
$jornada=$_GET["jornada"];
$curso  =$_GET["curso"];
$p  = new Profesor();
$h  = new Horario();
$profesores = $p->consultarMateriaProfesor();
$r          = $h->consultarHorario($jornada, $curso);
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
                            <td class="center bordered" >
                           <select name="f1'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f1".$e].'">'.$r["f1".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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
                           <select name="f2'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f2".$e].'">'.$r["f2".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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
                           <select name="f3'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f3".$e].'">'.$r["f3".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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
                           <select name="f4'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f4".$e].'">'.$r["f4".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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
                           <select name="f6'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f6".$e].'">'.$r["f6".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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
                           <select name="f7'.$e.'" class=" center browser-default select" >
                           <option value="'.$r["f7".$e].'">'.$r["f7".$e].'</option>';

                                foreach($profesores as $profesor){
                                $materias=explode(',',$profesor['materias']);
                                     for ($i=0; $i < count($materias) ; $i++)
                                     {
                                       echo "<option value='".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."'>".$profesor['nombreMateria']." - ".$profesor['nombreProfesor']."</option>";
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

             <div class="s12 center">
                 <br></br><br></br>
              <a class="waves-effect waves-light btn center actualizarH">Actualizar</a>
              <p id="resultadoHorario" class=" center"></p>
            </div>
</div>
</form>
