<?php
include '../../php/class/Alumno.class.php';
include '../../php/class/Curso.class.php';
$consulta= new Alumno();
$consulta1= new Curso();
$valor="0";
extract($_POST);

if($valor=="0"){
$alumnos=$consulta->consultarAlumnos();
}
else{
    $alumnos=$consulta->buscarAlumnos($valor);
  }
?>
<div class="card">
    <div class="card-content">
<div class="input-field col s12">
    <input id="busqueda" type="text"   required>
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
        <th data-field="price">Curso</th>

    </tr>
    </thead>

    <tbody>
    <?php
        foreach($alumnos as $a){
        $curso=$consulta1->consultarCurso($a['idcurso']);

            echo '<tr>
                    <td>'.$a["idalumno"].'</td>
                    <td>'.$a["nombreAlumno"].'</td>
                    <td>'.$a["direccionAlumno"].'</td>
                    <td>'.$a["celularAlumno"].'</td>
                    <td>'.$a["telefonoAlumno"].'</td>
                    <td>'.$curso.'</td>
                    <td><a class="editarAlumno teal-text" href="#/admin/alumno/buscar"><i class="mdi-content-create small "></i></a></td>
                    <td><a class="eliminarAlumno teal-text" href="#/admin/alumno/buscar"><i class="mdi-action-delete small"></i></a></td>

                </tr>';
        }
    ?>

    </tbody>
</table>

    </div>
</div>


<div id="modalEditarAlumno" class="modal">
    <h4>Editar Alumno</h4>
    <div class="bodyModalEditarAlumno"></div>
    <div class="action-bar">
        <a href="#/admin/alumno/buscar" class="waves-effect waves-light btn right actualizarAlumno" ><i class="mdi-notification-sync center white-text"></i></a>
        <a href="#/admin/alumno/buscar" class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>


<div id="modalEliminarAlumno" class="modal">
    <h4>Eliminar Alumno</h4>
    <div class="bodyModalEliminarAlumno">
        ¿Esta seguro que quiere eliminar este alumno?

    </div>
    <div class="action-bar">
        <a class="waves-effect waves-light btn right confirmacionEliminarAlumno " ><i class="mdi-action-delete center white-text"></i></a>
        <a class="waves-effect waves-light btn right modal-action modal-close" ><i class="mdi-content-clear center white-text"></i></a>


    </div>
</div>