<?php
include '../../php/class/Usuario.class.php';

$consulta= new Usuario();
$valor="0";
extract($_POST);

if($valor=="0"){
$usuario=$consulta->consultarUsuarios();
}
else{
$usuario=$consulta->buscarUsuarios($valor, $valor1);
  }
?>
<div class="card" >
    <div class="card-content">
        <div class="input-field col s6">
            <select name="tipoUsuario1" id="tipoUsuario1"  >
                <option value="" >Seleccione  usuario</option>
                <option value="1">Estudiante</option>
                <option value="2">Acudiente</option>
                <option value="3">Profesor</option>

            </select>
        </div>
        <div class="input-field col s6">
    <input id="busquedaUsuario" type="text"  required>
    <label for="search"><i class="mdi-action-search"></i> Buscar</label>
</div>
<div class="campovacio"></div>
<table>
    <thead>
    <tr>
        <th data-field="id">#</th>
        <th data-field="id">Nombre</th>
        <th data-field="price">Usuario</th>
        <th data-field="price">Contraseña</th>

    </tr>
    </thead>

    <tbody>
    <?php
        foreach($usuario as $u){
                switch($u['roll']){
                    case 1 :
                        $a=$consulta->consultarUsuariosAlumnosPorId($u['idusuario']);
                        echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAlumno"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>

                                <td><a class="editarUsuario teal-text" href=""><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href=""><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                            break;
                    case 2 :
                        $a=$consulta->consultarUsuariosAcudientesPorId($u['idusuario']);
                        echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreAcudiente"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href=""><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href=""><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                        break;

                    case 3 :
                        $a=$consulta->consultarUsuariosProfesorPorId($u['idusuario']);
                        echo '<tr>
                                <td>'.$a["idusuario"].'</td>
                                <td>'.$a["nombreProfesor"].'</td>
                                <td>'.$a["usuario"].'</td>
                                <td>'.$a["contrasena"].'</td>
                                <td><a class="editarUsuario teal-text" href=""><i class="mdi-content-create small "></i></a></td>
                                <td><a class="eliminarUsuario teal-text" href=""><i class="mdi-action-delete small"></i></a></td>

                            </tr>';

                        break;
                }

        }
    ?>

    </tbody>
</table>

    </div>
</div>


<div id="modalEditarUsuario" class="modal">
    <h4>Editar Usuario</h4>
    <div class="bodyModalEditarUsuario"></div>
    <div class="action-bar">
        <a class="waves-effect waves-light btn right actualizarUsuario" ><i class="mdi-notification-sync center white-text"></i></a>
        <a class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>


<div id="modalEliminarUsuario" class="modal">
    <h4>Eliminar Usuario</h4>
    <div class="bodyModalEliminarUsuario">
        ¿Esta seguro que quiere eliminar este Usuario?

    </div>
    <div class="action-bar">
        <a class="waves-effect waves-light btn right confirmacionEliminarUsuario " ><i class="mdi-action-delete center white-text"></i></a>
        <a class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>

<script>
        $('select').material_select();
</script>