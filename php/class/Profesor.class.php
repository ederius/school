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

    public function crearProfesor($nombre,$direccion,$celular,$telefono,$Matematicas,$Estadistica,$Geografia,$Geometria,$Historia,$Espanol,$Ingles,$Informatica,$Arte,$Urbanidad,$Deportes,$Etica,$Biologia,$Quimica,
        $Fisica,$Religion,$Trigonometria,$CienciasPoliticas,$Emprendimiento,$Democracia,$Algebra,$Naturales)

        {

        try {
            $id="";
            $query = $this->db->prepare(' insert into profesor values( :id, :nombre, :direccion, :celular, :telefono, ,:Matematicas,:Estadistica,:Geografia,:Geometria,:Historia,:Espanol,:Ingles,
                :Informatica,:Arte,:Urbanidad,:Deportes,:Etica,:Biologia,:Quimica,:Fisica,:Religion,
                :Trigonometria,:CienciasPoliticas,:Emprendimiento,:Democracia,:Algebra,:Naturales) 
                ');
            $e=$query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'Matematicas' => $Matematicas, 'Estadistica' => $Estadistica, 'Geografia' =>   $Geografia, 'Geometria' => $Geometria, 'Historia' => $Historia, 'Espanol' => $Espanol, 'Ingles' =>      $Ingles, 'Informatica' => $Informatica, 'Arte' => $Arte, 'Urbanidad' => $Urbanidad, 'Deportes' =>       $Deportes, 'Etica' => $Etica, 'Biologia' => $Biologia, 'Quimica' => $Quimica, 'Fisica' => $Fisica,      'Religion' => $Religion, 'Trigonometria' => $Trigonometria, 'CienciasPoliticas' => $CienciasPoliticas,  'Emprendimiento' => $Emprendimiento, 'Democracia' => $Democracia, 'Algebra' => $Algebra, 'Naturales' => $Naturales));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>'.$Matematicas;
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



    public function actualizarProfesor($id,$nombre,$direccion,$celular,$telefono,$idmateria){

        $query = $this->db->prepare("update profesor set nombreProfesor=:nombre, direccionProfesor=:direccion,celularProfesor=:celular,telefonoProfesor=:telefono,idmateria=:idmateria where idprofesor=:id ");
        $query->execute(array('id' => $id,'nombre' => $nombre, 'direccion' => $direccion, 'celular' => $celular, 'telefono' => $telefono, 'idmateria' => $idmateria));
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






}
