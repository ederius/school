<?php
include '../../php/class/Profesor.class.php';
include '../../php/class/Materia.class.php';
$consulta= new Profesor();
$consulta1= new Materia();
$valor="0";
extract($_POST);

if($valor=="0"){
    $profesor=$consulta->consultarProfesores();
}
else{
    $profesor=$consulta->buscarProfesor($valor);
}
?>

<?php
foreach($profesor as $a){
        $materias=explode(',',$a['materias']);
        $e=count($materias);


            echo '<tr>
                    <td>'.$a["idprofesor"].'</td>
                    <td>'.$a["nombreProfesor"].'</td>
                    <td>'.$a["direccionProfesor"].'</td>
                    <td>'.$a["celularProfesor"].'</td>
                    <td>'.$a["telefonoProfesor"].'</td>
                    <td>';

                    for ($i=$e-1; $i >= 0 ; $i--) { 
                        echo $materias[$i];
                        if($i > 0){
                            echo ", ";
                        }
                    }
                    echo '</td>
                    <td><a class="editarProfesor teal-text" href="#/admin/profesor/buscar"><i class="mdi-content-create small "></i></a></td>
                    <td><a class="eliminarProfesor teal-text" href="#/admin/profesor/buscar"><i class="mdi-action-delete small"></i></a></td>

                </tr>';
}
?>
