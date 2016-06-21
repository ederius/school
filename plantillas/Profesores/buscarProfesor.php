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
<div class="card">
    <div class="card-content">
<div class="input-field col s12">
    <input id="busquedaProfesor" type="text"   required>
    <label for="search"><i class="mdi-action-search"></i> Buscar</label>
</div>

<table>
    <thead>
    <tr>
        <th data-field="id">#</th>
        <th data-field="id">Nombre</th>
        <th data-field="name">Dirección</th>
        <th data-field="price">Celular</th>
        <th data-field="price">Telefono</th>
        <th data-field="price">Materia</th>

    </tr>
    </thead>

    <tbody>
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
                    <td><a class="editarProfesor teal-text" href=""><i class="mdi-content-create small "></i></a></td>
                    <td><a class="eliminarProfesor teal-text" href=""><i class="mdi-action-delete small"></i></a></td>

                </tr>';
        }
    ?>

    </tbody>
</table>

    </div>
</div>


<div id="modalEditarProfesor" class="modal">
    <h4>Editar Profesor</h4>
    <div class="bodyModalEditarProfesor"></div>
    <div class="action-bar">
        <a class="waves-effect waves-light btn right actualizarProfesor" ><i class="mdi-notification-sync center white-text"></i></a>
        <a class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>


<div id="modalEliminarProfesor" class="modal">
    <h4>Eliminar Profesor</h4>
    <div class="bodyModalEliminarProfesor">
        ¿Esta seguro que quiere eliminar este Profesor?

    </div>
    <div class="action-bar">
        <a class="waves-effect waves-light btn right confirmacionEliminarProfesor " ><i class="mdi-action-delete center white-text"></i></a>
        <a class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>