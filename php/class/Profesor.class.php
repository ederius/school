<?php


class Profesor{

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

    public function consultarProfesorporid($id){


        $query = $this->db->prepare(' select * from profesor where idprofesor = :id ');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);


    }

    public function crearProfesor($nombre,$direccion,$celular,$telefono,$datos)

        {

        try {
            $id="";
            $query = $this->db->prepare(' insert into profesor values( :id, :nombre, :direccion, :celular, :telefono, :datos)
                ');
            $e=$query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'datos' => $datos));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }


    }




    public function consultarProfesores(){


        $query = $this->db->prepare(' select * from profesor ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);


    }





    public function buscarProfesor($valor){


        $query = $this->db->prepare("select * from profesor WHERE nombreProfesor like '%".$valor."%'   ");
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);

    }



    public function actualizarProfesor($id,$nombre,$direccion,$celular,$telefono,$datos){

        $query = $this->db->prepare("update profesor set nombreProfesor=:nombre, direccionProfesor=:direccion,celularProfesor=:celular,telefonoProfesor=:telefono,materias=:datos where idprofesor=:id ");
        $query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'datos' => $datos));
        $resultado=$query->fetchAll();

        if(!$query){
            echo'<div class="center-aligner center  red white-text btn">Error!!</div>';
        }else{
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }

    }

    public function eliminarProfesor($id){


        $query = $this->db->prepare("delete from profesor WHERE idprofesor = :id ");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);

    }


    public function consultarMateriaProfesor(){

              $query = $this->db->prepare("select * from profesor, materias WHERE profesor.idmateria=materias.idmateria  ");
              $query->execute();
              $resultado=$query->fetchAll();
              return($resultado);

    }





}
