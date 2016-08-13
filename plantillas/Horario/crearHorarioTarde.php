<?php
include '../../php/class/Profesor.class.php';
$p = new Profesor();
$profesores = $p->consultarMateriaProfesor();
?>
<br>
<h5 class="center">Horario de la tarde</h5>
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
                            <td class="center bordered">12:00 - 13:45</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f1'.$e.'" class=" center browser-default select" >
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
                            <td class="center bordered">13:45 - 14:30</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f2'.$e.'" class=" center browser-default select" >
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
                            <td class="center bordered">14:30 - 15:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f3'.$e.'" class=" center browser-default select" >
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
                            <td class="center bordered">15:15 - 16:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f4'.$e.'" class=" center browser-default select" >
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
                            <td class="center bordered">16:00 - 16:30</td>
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
                            <td class="center bordered">16:30 - 17:15</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f6'.$e.'" class=" center browser-default select" >
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
                            <td class="center bordered">17:15 - 18:00</td>
                            <?php
                            for($e=1;$e<=7;$e++){
                                echo '
                            <td class="center bordered" >
                           <select name="f7'.$e.'" class=" center browser-default select" >
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


  </form>
             <div class="s12 center">
                 <br></br><br></br>
              <a class="waves-effect waves-light btn center guardarHM">Guardar</a>
              <p id="resultadoHorario" class=" center"></p>
            </div>





</div>
