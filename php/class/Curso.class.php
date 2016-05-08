<?php


class Curso {

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


    public function consultarCursos()
    {
        $query = $this->db->prepare(' select * from curso ');
        $query->execute(array());
        $resultado = $query->fetchAll();
        return($resultado);
    }


    public function consultarCurso($idcurso)
    {
        $query = $this->db->prepare(' select * from curso where idcurso = :idcurso ');
        $query->execute(array('idcurso' => $idcurso));
        $resultado = $query->fetchAll();
        foreach ($resultado as $curso) {
            return ($curso['nombreCurso']);
        }
    }

    public function consultarCursoporid($idcurso)
    {
        $query = $this->db->prepare(' select * from curso where idcurso = :idcurso ');
        $query->execute(array('idcurso' => $idcurso));
        $resultado = $query->fetchAll();
        return($resultado);
    }

    public function consultarCursoporNombre($nombreCurso)
    {
        $query = $this->db->prepare(' select * from curso where nombreCurso = :nombreCurso ');
        $query->execute(array('nombreCurso' => $nombreCurso));
        $resultado = $query->fetchAll();
        foreach ($resultado as $curso) {
            return ($curso['idcurso']);
        }
    }


}
