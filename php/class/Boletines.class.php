<?php

class Boletines
{

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


    public function buscarAlumnosXBusqueda($busqueda, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.nombreAlumno like '%" . $busqueda . "%'   ");
        $query->execute(array('busqueda' => $busqueda,));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>
        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }

    public function buscarAlumnosXjornadaBusqueda($idjornada, $busqueda, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=" . $idjornada . " and alumno.nombreAlumno like '%" . $busqueda . "%'   ");
        $query->execute(array('idjornada' => $idjornada, 'busqueda' => $busqueda));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>
        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


    public function buscarAlumnosXjornada($idjornada, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=" . $idjornada . "   ");
        $query->execute(array('idjornada' => $idjornada));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>

        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


    public function buscarAlumnosXcursoJornadaBusqueda($idcurso, $idjornada, $busqueda, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=" . $idjornada . " and alumno.idcurso=" . $idcurso . " and alumno.nombreAlumno like '%" . $busqueda . "%'   ");
        $query->execute(array('idjornada' => $idjornada, 'idcurso' => $idcurso, 'busqueda' => $busqueda));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>

        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


    public function buscarAlumnosXcursoJornada($idcurso, $idjornada, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada  and alumno.idjornada=" . $idjornada . " and alumno.idcurso=" . $idcurso . "  ");
        $query->execute(array('idjornada' => $idjornada, 'idcurso' => $idcurso));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>

        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


    public function buscarAlumnosXcurso($idcurso, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=" . $idcurso . "  ");
        $query->execute(array('idcurso' => $idcurso));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>

        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>


    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


    public function buscarAlumnosXcursoBusqueda($idcurso, $busqueda, $periodo)
    {

        $query = $this->db->prepare("select * from alumno, jornada, curso WHERE alumno.idcurso=curso.idcurso and
alumno.idjornada = jornada.idjornada and alumno.idcurso=" . $idcurso . " and alumno.nombreAlumno like '%" . $busqueda . "%'  ");
        $query->execute(array('idcurso' => $idcurso, 'busqueda' => $busqueda));
        $resultado = $query->fetchAll();
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
        foreach ($resultado as $r) {
            echo '
    <tr>
        <td>' . $r["idalumno"] . '</td>
        <td>' . $r["nombreAlumno"] . '</td>
        <td>' . $r["gradoCurso"] . '</td>
        <td>' . $r["nombreCurso"] . '</td>
        <td>' . utf8_encode($r["nombreJornada"]) . '</td>
        <td><a class="generarBoletin' . $periodo . ' teal-text" href="#/admin/boletines/generar" alt="Generar bolet&iacute;n"><i class="mdi-action-assignment small "></i></a></td>
    </tr>
    ';

        }
        echo '  </tbody>
</table>';

    }


}