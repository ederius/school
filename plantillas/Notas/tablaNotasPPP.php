<?php
session_start();
extract($_POST);
include '../../php/class/Usuario.class.php';
include '../../php/class/Materia.class.php';
$variable=$_POST["grado"];
$_SESSION['grado']=$variable;
$m= new Materia();
$u=new Usuario();
$re=$u->consultarUsuariosProfesorPorId($_SESSION['idusuario']);  // aca mandamos el id del usuario a la funcion
$r=$m->consultarMateriasXCurso($variable);
?>

<table>

    <thead>
    <tr>
        <th data-field="id" class="center"> Materia</th>
        <th data-field="name" class="center"> Nota</th>
        <th data-field="price" class="center"> Descripción</th>
    </tr>
    </thead>


    <tbody>
    <form class="NotasAlumno10" id="NotasAlumno10">
        <?php
            echo'
                    <tr>
                        <td>'.$re["nombreMateria"].'</td>
                        <td><input type="text" name="nota'.utf8_encode($re["nombreMateria"]).'" id="nota'.utf8_encode($re["nombreMateria"]).'" class="center"></td>
                        <td><textarea name="descrip'.utf8_encode($re["nombreMateria"]).'" id="descrip'.utf8_encode($re["nombreMateria"]).'" cols="45" rows="40"></textarea></td>
                    </tr>
                 ';
        ?>
    </form>
    </tbody>


</table>

<?php echo '<a class="btn-floating btn-large waves-effect waves-light red right guardarNotas'.$periodo.'" ><i class="mdi-content-add"></i></a>';?>
