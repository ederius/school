<?php


class Alumno {
    public $servidor ="localhost";
    public $usuario  ="root";
    public $contra   ="";
    public $tipo     ="mysql";


    public function __construct(){

        try{
            $this->db=new PDO('mysql:host=localhost;dbname=school;','root','');
        }
        catch(PDOException $e){
            echo $e->getMessage();
        };
    }



    public function  inicio_sesion($tipo,$usuario,$contra)
    {

        $query = $this->db->prepare(' select * from usuario where usuario = :usuario ');
        $query->execute(array('usuario'=> $usuario));
        $resultado=$query->fetchAll();
        foreach ($resultado as $row) { }
        if($row['roll']==$tipo && $row['contrasena']==$contra ) {
            session_start();
            $_SESSION['valido']=1;
            $_SESSION['idusuario']=$row['idusuario'];
            $_SESSION['usuario']=$row['usuario'];
            $_SESSION['contrasena']=$row['contrasena'];
            $_SESSION['roll']=$row['roll'];
            $_SESSION['ididentidad']=$row['ididentidad'];

             switch($_SESSION['roll']){
                 case 1:
                     echo 1;
                     break;
                 case 2:
                     echo 2;
                     break;
                 case 3:
                     echo 3;
                     break;
                 case 4:
                     echo 4;
                     break;

             }
            }
        else{
            echo '<div class="center-aligner red lighten-1 white-text btn">Verifique sus datos</div>'	;
        }

    }

    public function consultarAlumnos(){

        $query = $this->db->prepare(' select * from alumno ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);

    }

    public function consultarAlumnosporid($id){

        $query = $this->db->prepare(' select * from alumno, jornada, curso where alumno.idjornada=jornada.idjornada and alumno.idcurso=curso.idcurso and idalumno = :id ');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);

    }



        public function crearAlumno($nombre,$direccion,$celular,$telefono,$idcurso,$idjornada){

            try {
                $id="";
                $query = $this->db->prepare(' insert into alumno values( :id, :nombre, :direccion, :celular, :telefono, :idcurso, :idjornada) ');
                $e=$query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idcurso' => $idcurso, 'idjornada' => $idjornada));
                }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            if($query){
             echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
            }
        }


    public function crearAcudiente($idalumno,$nombreAcudiente,$direccionAcudiente,$direccionAcudienteTrabajo,$emailAcudiente,$celularAcudiente,$telefonoAcudiente){

        try {
            $id="";
            $query = $this->db->prepare(' insert into acudiente values( :id, :nombre,:celular, :telefono, :direccion, :direccionTrabajo,:email,:idalumno) ');
            $e=$query->execute(array('id' => $id,'nombre' => $nombreAcudiente, 'direccion' => $direccionAcudiente,'direccionTrabajo' => $direccionAcudienteTrabajo,'email' => $emailAcudiente, 'celular' => $celularAcudiente, 'telefono' => $telefonoAcudiente, 'idalumno' => $idalumno));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }
    }

    public function buscarAlumnos($valor){

        $query = $this->db->prepare("select * from alumno WHERE nombreAlumno like '%".$valor."%'   ");
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);
    }


    public function buscarAlumnosParaNotas($idcurso, $idjornada, $busqueda){

        $query = $this->db->prepare("select * from alumno WHERE idcurso=:idcurso and idjornada=:idjornada and nombre like '%".$busqueda."%'   ");
        $query->execute(array('idcurso' => $idcurso,'idjornada' => $idjornada,'busqueda' => $busqueda,));
        $resultado=$query->fetchAll();
        echo '      <table>
        <thead>
          <tr>
                 <th >#</th>
                 <th >Nombre</th>
                 <th >Dirección</th>
                <th >Celular</th>
                 <th >Telefono</th>
                  <th >Curso</th>
                  <th >Jornada</th>
          </tr>
        </thead>

        <tbody>
       ';
        foreach($resultado as $r){
        echo'
                < tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombre"].'</td>
                    <td>'.$r["direccion"].'</td>
                    <td>'.$r["celular"].'</td>
                    <td>'.$r["telefono"].'</td>
                    <td>'.$r["idcurso"].'</td>
                    <td>'.$r["idjornada"].'</td>
                  </tr>
            ';
        }
        echo'  </tbody>
      </table>';
    }

    public function actualizarAlumno($id,$nombre,$direccion,$celular,$telefono,$idcurso, $idjornada){

        $query = $this->db->prepare("update alumno set nombreAlumno=:nombre, direccionAlumno=:direccion,celularAlumno=:celular,telefonoAlumno=:telefono,idcurso=:idcurso,idjornada=:idjornada where idalumno=:id ");
        $query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idcurso' => $idcurso, 'idjornada' => $idjornada));
        $resultado=$query->fetchAll();

        if(!$query){
            echo'<div class="center-aligner center  red white-text btn">Error!!</div>';
        }else{
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }

    }

    public function eliminarAlumno($id){

    $query = $this->db->prepare("delete from alumno WHERE idalumno = :id ");
    $query->execute(array('id' => $id));
    $resultado=$query->fetchAll();
    return($resultado);

}

    public function Jornadas(){
        $query = $this->db->prepare("SELECT * from jornada ");
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);

    }






    public function buscarAlumnosXBusqueda($busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
      alumno.idjornada = jornada.idjornada and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('busqueda' => $busqueda,));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

    public function buscarAlumnosXjornadaBusqueda($idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                          <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }




    public function buscarAlumnosXjornada($idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada."   ");
        $query->execute(array('idjornada' => $idjornada));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }



    public function buscarAlumnosXcursoJornadaBusqueda($idcurso, $idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoJornada($idcurso, $idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcurso($idcurso, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoBusqueda($idcurso, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'  ");
        $query->execute(array('idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/admin/notas/crear"><i class="mdi-action-search small "></i></a></td>
                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

/*********************************  FUNCIONES DE ACTUALIZAR LAS NOTAS  *********************/


    public function buscarAlumnosXBusqueda2($busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
      alumno.idjornada = jornada.idjornada and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('busqueda' => $busqueda,));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

    public function buscarAlumnosXjornadaBusqueda2($idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                          <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }




    public function buscarAlumnosXjornada2($idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada."   ");
        $query->execute(array('idjornada' => $idjornada));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }



    public function buscarAlumnosXcursoJornadaBusqueda2($idcurso, $idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoJornada2($idcurso, $idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcurso2($idcurso, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoBusqueda2($idcurso, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'  ");
        $query->execute(array('idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/admin/notas/editar"><i class="mdi-action-search small "></i></a></td>
                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


/*************** FUNCIONES DE PROFESORES  ***********************************************/


    public function buscarAlumnosXBusquedaP($busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
      alumno.idjornada = jornada.idjornada and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('busqueda' => $busqueda,));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>
                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

    public function buscarAlumnosXjornadaBusquedaP($idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                          <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }




    public function buscarAlumnosXjornadaP($idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada."   ");
        $query->execute(array('idjornada' => $idjornada));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }



    public function buscarAlumnosXcursoJornadaBusquedaP($idcurso, $idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoJornadaP($idcurso, $idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoP($idcurso, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoBusquedaP($idcurso, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'  ");
        $query->execute(array('idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.' teal-text" href="#/profesor/notas/crear"><i class="mdi-action-search small "></i></a></td>
                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

    /*********************************  FUNCIONES DE ACTUALIZAR LAS NOTAS PROFESORES  *********************/


    public function buscarAlumnosXBusquedaP2($busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
      alumno.idjornada = jornada.idjornada and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('busqueda' => $busqueda,));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }

    public function buscarAlumnosXjornadaBusquedaP2($idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                          <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }




    public function buscarAlumnosXjornadaP2($idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada."   ");
        $query->execute(array('idjornada' => $idjornada));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }



    public function buscarAlumnosXcursoJornadaBusquedaP2($idcurso, $idjornada, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'   ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoJornadaP2($idcurso, $idjornada, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=".$idjornada." and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idjornada' => $idjornada,'idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoP2($idcurso, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso."  ");
        $query->execute(array('idcurso' => $idcurso));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                                        <td>'.$r["gradoCurso"].'</td>

                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>


                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }


    public function buscarAlumnosXcursoBusquedaP2($idcurso, $busqueda, $periodo){

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=".$idcurso." and alumno.nombreAlumno like '%".$busqueda."%'  ");
        $query->execute(array('idcurso' => $idcurso,'busqueda' => $busqueda));
        $resultado=$query->fetchAll();
        echo ' <table>
                <thead>
                  <tr>
                         <th >#</th>
                         <th >Nombre</th>
                         <th >Grado</th>
                         <th >Curso</th>
                         <th >Jornada</th>
                  </tr>
                </thead>

        <tbody>
       ';
        foreach($resultado as $r){
            echo'
                <tr>
                    <td>'.$r["idalumno"].'</td>
                    <td>'.$r["nombreAlumno"].'</td>
                    <td>'.$r["gradoCurso"].'</td>
                    <td>'.$r["nombreCurso"].'</td>
                    <td>'.utf8_encode($r["nombreJornada"]).'</td>
                    <td><a class="verNotas'.$periodo.'2 teal-text" href="#/profesor/notas/editar"><i class="mdi-action-search small "></i></a></td>
                  </tr>
            ';

        }
        echo'  </tbody>
      </table>';

    }



}
