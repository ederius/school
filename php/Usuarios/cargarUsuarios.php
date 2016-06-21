<?php

include '../class/Alumno.class.php';
include '../class/Profesor.class.php';
include '../class/Admin.class.php';
extract($_POST);

switch($roll){
    case 1:
        $a=new Alumno();
        $resultado=$a->consultarAlumnos();
        echo '
                <select name="ididentificacion" id="ididentificacion"  >
                    <option value="" >Seleccione usuario</option>';
        foreach($resultado as $alumnos){
            echo '<option value="'.$alumnos["idalumno"].'" >'.$alumnos["nombreAlumno"].'</option> ';
        }
             echo '</select>
                   <script>
                        $("select").material_select();
                        $(".tooltipped").tooltip({delay: 50});

                    </script> ';
        break;


    case 2:
        $a=new Alumno();
        $resultado=$a->consultarAlumnos();
        echo '
                <select name="ididentificacion" id="ididentificacion"  >
                    <option value="" >Seleccione usuario</option>';
        foreach($resultado as $alumnos){
            echo '<option value="'.$alumnos["idalumno"].'" >'.$alumnos["nombreAlumno"].'</option> ';
        }
        echo '</select>
                   <script>
                        $("select").material_select();
                        $(".tooltipped").tooltip({delay: 50});

                    </script> ';
        break;

    case 3:
        $a=new Profesor();
        $resultado=$a->consultarProfesores();
        echo '
                <select name="ididentificacion" id="ididentificacion"  >
                    <option value="" >Seleccione usuario</option>';
        foreach($resultado as $profesor){
            echo '<option value="'.$profesor["idprofesor"].'" >'.$profesor["nombreProfesor"].'</option> ';
        }
        echo '</select>
                   <script>
                        $("select").material_select();
                        $(".tooltipped").tooltip({delay: 50});

                    </script> ';
        break;

    case 4:
        $a=new Admin();
        $resultado=$a->consultarAdmins();
        echo '
                <select name="ididentificacion" id="ididentificacion"  >
                    <option value="" >Seleccione usuario</option>';
        foreach($resultado as $profesor){
            echo '<option value="'.$profesor["idadministrador"].'" >'.$profesor["nombre"].'</option> ';
        }
        echo '</select>
                   <script>
                        $("select").material_select();
                        $(".tooltipped").tooltip({delay: 50});

                    </script> ';
        break;
}
?>