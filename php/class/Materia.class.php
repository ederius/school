<?php


class Materia{
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


    public function consultarMaterias(){


        $query = $this->db->prepare(' select * from materias ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);


    }

    public function consultarMateriasXCurso($grado){


    $query = $this->db->prepare(' select * from curso,cursoxmateria, materias where curso.idcurso = cursoxmateria.idcurso and materias.idmateria = cursoxmateria.idmateria and curso.nombreCurso="'.$grado.'" ');
    $query->execute();
    $resultado=$query->fetchAll();
    return($resultado);


}


    public function consultarMateriasXCurso1($grado){


        $query = $this->db->prepare(' select * from curso,cursoxmateria, materias where curso.idcurso = cursoxmateria.idcurso and materias.idmateria = cursoxmateria.idmateria and curso.idCurso="'.$grado.'" ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);


    }


    public function consultarMateria($idmateria)
    {


        $query = $this->db->prepare(' select * from materias where idmateria = :idmateria ');
        $query->execute(array('idmateria' => $idmateria));
        $resultado = $query->fetchAll();
        foreach ($resultado as $materia) {
            return ($materia['nombreMateria']);
        }
    }

    public function consultarMateriasporid($id){

        $query = $this->db->prepare(' select * from materias where idmateria = :id ');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);

    }



    public function crearMateria($nombre,$direccion,$celular,$telefono,$idcurso){

        try {
            $id="";
            $query = $this->db->prepare(' insert into alumno values( :id, :nombre, :direccion, :celular, :telefono, :idcurso) ');
            $e=$query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idcurso' => $idcurso));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($e==""){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }



    }





}
