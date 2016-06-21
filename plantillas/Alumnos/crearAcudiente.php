<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c=new Curso();
$a=new Alumno();
?>


<div class="row">
    <h5> Nuevo Acudiente</h5>
    <form class="col s12 card" name="crearAcudiente" id="crearAcudiente">
        <div class="row card-content">

            <div class="input-field col s10 selectAcudiente">
                <select name="idAlumnoAcudiente" id="idAlumnoAcudiente"  >
                    <option value="" > Seleccione Acudiente</option>
                </select>


            </div>
            <a class="left btn AlumnoAcudiente white-text"> <i class="mdi-action-autorenew"></i></a>

            <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <input name="nombreAcudiente" id="nombreAcudiente" type="text" class="validate">
                <label for="nombreAcudiente">Nombre Completo de Acudiente</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-action-home prefix"></i>
                <input name="direccionAcudiente" id="direccionAcudiente" type="tel" class="validate">
                <label for="direccionAcudiente">Dirección Acudiente</label>
            </div>

            <div class="input-field col s6">
                <i class="mdi-action-home prefix"></i>
                <input name="direccionAcudienteTrabajo" id="direccionAcudienteTrabajo" type="tel" class="validate">
                <label for="direccionAcudienteTrabajo">Dirección de trabajo</label>
            </div>

            <div class="input-field col s6">
                <i class="mdi-communication-email prefix"></i>
                <input name="emailAcudiente" id="emailAcudiente" type="tel" class="validate">
                <label for="emailAcudiente">E-mail</label>
            </div>

            <div class="input-field col s6">
                <i class="mdi-communication-stay-current-portrait prefix"></i>
                <input name="celularAcudiente" id="celularAcudiente" type="tel" class="validate">
                <label for="celularAcudiente">Celular</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-phone prefix"></i>
                <input name="telefonoAcudiente" id="telefonoAcudiente" type="tel" class="validate">
                <label for="telefonoAcudiente">Telefono</label>
            </div>


        </div>
        <div class="errorAcudiente center center-align"></div>
        <a class="waves-effect waves-light btn right crearAcudiente"><i class="mdi-social-person-add center white-text"></i></a>
 



</div>

<script>    $('select').material_select();
</script>