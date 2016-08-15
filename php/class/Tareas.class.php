<?php


class Tareas {
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

    public function consultarTareaporId($id){

        $query = $this->db->prepare(' select * from tareas where idtareas= :id');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        foreach($resultado as $r){}
        return($r);

    }

    public function consultarTareasporidAlumno($fechaInicio, $fechaTope,$curso,$jornada){

        $query = $this->db->prepare(' select * from tareas,profesor,materias,curso
        where tareas.idcurso=curso.idcurso and
        tareas.idprofesor=profesor.idprofesor and
        profesor.idmateria=materias.idmateria and
        (tareas.fecha between :fechaInicio and :fechaTope) and
        tareas.idcurso=:idCurso and
        tareas.idjornada=:jornada

        ');
        $query->execute(array('fechaInicio' => $fechaInicio,'fechaTope' => $fechaTope,'idCurso'=>$curso,'jornada'=>$jornada));
        $resultado=$query->fetchAll();

        return($resultado);

    }



    public function asignarTareas($idprofesor,$cursoTarea,$jornadaTarea,$fecha,$editor,$titulo){

        try {
            $id="";
            $query = $this->db->prepare(' insert into tareas values(:id,:idprofesor, :cursoTarea, :jornadaTarea, :titulo,:editor, :fecha) ');
            $e=$query->execute(array('id' => $id,'idprofesor' => $idprofesor,'cursoTarea' => $cursoTarea,'jornadaTarea' => $jornadaTarea, 'fecha' => $fecha, 'editor' => $editor,'titulo' => $titulo));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }
    }



    public function consultarTareasporidProfesor($fechaInicio, $fechaTope,$idprofe){

        $query = $this->db->prepare(' select * from tareas,profesor,materias,curso
        where tareas.idcurso=curso.idcurso and
        tareas.idprofesor=profesor.idprofesor and
        profesor.idmateria=materias.idmateria and
        (tareas.fecha between :fechaInicio and :fechaTope) and
        tareas.idprofesor=:idprofe
        ');
        $query->execute(array('fechaInicio' => $fechaInicio,'fechaTope' => $fechaTope,'idprofe'=>$idprofe));
        $resultado=$query->fetchAll();

        return($resultado);

    }

    public function eliminarTareas($id){

      $query = $this->db->prepare(' delete from tareas where idtareas=:id ');
      $query->execute(array('id' => $id));
      $resultado=$query->fetchAll();

      return($resultado);

    }


}
