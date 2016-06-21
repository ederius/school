<?php


class Admin {
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




    public function consultarAdmins(){


        $query = $this->db->prepare(' select * from administradores ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);


    }

    public function consultarAlumnosporid($id){


        $query = $this->db->prepare(' select * from alumno where idalumno = :id ');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);


    }



    public function crearAlumno($nombre,$direccion,$celular,$telefono,$idcurso){

        try {
            $id="";
            $query = $this->db->prepare(' insert into alumno values( :id, :nombre, :direccion, :celular, :telefono, :idcurso) ');
            $e=$query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idcurso' => $idcurso));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }



    }

    public function buscarAlumnos($valor){


        $query = $this->db->prepare("select * from alumno WHERE nombre like '%".$valor."%'   ");
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);

    }

    public function actualizarAlumno($id,$nombre,$direccion,$celular,$telefono,$idcurso){

        $query = $this->db->prepare("update alumno set nombre=:nombre, direccion=:direccion,celular=:celular,telefono=:telefono,idcurso=:idcurso where idalumno=:id ");
        $query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idcurso' => $idcurso));
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




}
