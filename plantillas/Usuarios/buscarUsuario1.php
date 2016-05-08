<?php
include '../../php/class/Usuario.class.php';

$consulta= new Usuario();
$valor="0";
$valor1="0";
extract($_POST);
if($valor=="0" || $valor1=="0"){
    $usuario=$consulta->consultarUsuarios();
    foreach($usuario as $u){
        switch($u['roll']){
            case 1 :
                $a=$consulta->consultarUsuariosAlumnosPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAlumno"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>

                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;
            case 2 :
                $a=$consulta->consultarUsuariosAcudientesPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAcudiente"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;

            case 3 :
                $a=$consulta->consultarUsuariosProfesorPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreProfesor"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;
        }

    }

}
else{
    $usuario=$consulta->buscarUsuarios($valor, $valor1);
    foreach($usuario as $u){

        switch($valor1){
            case 1 :
                $a=$consulta->consultarUsuariosAlumnosPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAlumno"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>

                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;
            case 2 :
                $a=$consulta->consultarUsuariosAcudientesPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAcudiente"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;

            case 3 :
                $a=$consulta->consultarUsuariosProfesorPorId($u['idusuario']);
                echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreProfesor"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href="#/admin/usuario/bucar"><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                break;
        }
    }

}


?>
