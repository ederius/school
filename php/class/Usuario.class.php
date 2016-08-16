<?php


class Usuario {
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


    public function consultarUsuarios(){


        $query = $this->db->prepare(' select * from usuario ');
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);


    }

    public function consultarUsuariosporid($id){

        $query = $this->db->prepare(' select * from usuario where idusuario = :id ');
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);

    }



    public function crearUsuario($usuario,$contrasena,$roll,$ididentidad){

        try {
            $id="";
            $query = $this->db->prepare(' insert into usuario values( :id, :usuario, :contrasena, :roll, :ididentidad) ');
            $e=$query->execute(array('id' => $id,'usuario' => $usuario, 'contrasena' => $contrasena, 'roll' => $roll, 'ididentidad' => $ididentidad ));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }
    }


    public function consultarUsuariosAlumnos(){

        $query = $this->db->prepare("SELECT * FROM usuario, alumno where usuario.ididentidad = alumno.idalumno and roll = 1 and :id = idusuario");
        $query->execute();
        $resultado=$query->fetchAll();
        return($resultado);

    }

    public function consultarUsuariosAlumnosPorId($id){

        $query = $this->db->prepare("SELECT * FROM usuario, alumno where usuario.ididentidad = alumno.idalumno and roll = 1 and :id = idusuario ");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        foreach($resultado as $a){}
        return($a);

    }

    public function consultarUsuariosAcudientesPorId($id){

        $query = $this->db->prepare("SELECT * FROM usuario, acudiente where usuario.ididentidad = acudiente.idacudiente and roll = 2 and :id = idusuario");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        foreach($resultado as $a){}
        return($a);

    }

    public function consultarUsuariosProfesorPorId($id){

        $query = $this->db->prepare("SELECT * FROM profesor where idprofesor=".$id."");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        return($resultado);

    }


    public function consultarMateriaProfesorPorId($id){

        $query = $this->db->prepare("SELECT * FROM usuario, profesor where usuario.ididentidad = profesor.idprofesor and roll = 3 and :id = idusuario");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();
        foreach($resultado as $a){}
        return($a);

    }


    public function buscarUsuarios($valor,$valor1)
    {

        if ($valor1 == 1){
            $query = $this->db->prepare("select usuario.idusuario,alumno.nombreAlumno, usuario.usuario, usuario.contrasena from usuario join alumno on usuario.ididentidad=alumno.idalumno WHERE alumno.nombreAlumno like '%" . $valor . "%' and roll=1 ");
        $query->execute(array('valor' => $valor, 'valor1' => $valor1));
        $resultado = $query->fetchAll();
        return ($resultado);
         }
        if ($valor1 == 2){
            $query = $this->db->prepare("select usuario.idusuario,acudiente.nombreAcudiente, usuario.usuario, usuario.contrasena from usuario join acudiente on usuario.ididentidad=acudiente.idacudiente WHERE acudiente.nombreAcudiente like '%" . $valor . "%' and roll=2 ");
            $query->execute(array('valor' => $valor, 'valor1' => $valor1));
            $resultado = $query->fetchAll();
            return ($resultado);
        }
        if ($valor1 == 3){
            $query = $this->db->prepare("select usuario.idusuario,profesor.nombreProfesor, usuario.usuario, usuario.contrasena from usuario join profesor on usuario.ididentidad=profesor.idprofesor WHERE profesor.nombreProfesor like '%" . $valor . "%' and roll=3 ");
            $query->execute(array('valor' => $valor, 'valor1' => $valor1));
            $resultado = $query->fetchAll();
            return ($resultado);
        }


    }

    public function actualizarUsuario($idusuario,$usuario,$contrasena){

        $query = $this->db->prepare("update usuario set usuario=:usuario, contrasena=:contrasena where idusuario=:idusuario ");
        $query->execute(array('idusuario' => $idusuario,'usuario' => $usuario, 'contrasena' => $contrasena));
        $resultado=$query->fetchAll();

        if(!$query){
            echo'<div class="center-aligner center  red white-text btn">Error!!</div>';
        }else{
            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        }

    }

    public function eliminarUsuario($id){

        $query = $this->db->prepare("delete from usuario WHERE idusuario = :id ");
        $query->execute(array('id' => $id));
        $resultado=$query->fetchAll();

            echo'<div class="center-aligner center  light-blue white-text btn">Guardado!!</div>';
        

    }

    public function cambiarContrasenaUsuario($contrasena,$usuario){

        $query = $this->db->prepare("update usuario set contrasena=:contrasena where idusuario=:usuario ");
        $query->execute(array('usuario' => $usuario, 'contrasena' => $contrasena));
        $resultado=$query->fetchAll();
        return 1;
    }

    public function validarContrasenaUsuario($contrasena,$idusuario){

        $query = $this->db->prepare("SELECT * FROM usuario where idusuario = :id");
        $query->execute(array('id' => $idusuario,));
        $resultado=$query->fetchAll();
        foreach($resultado as $a){}
        if($a["contrasena"]==$contrasena){
      echo 1;
        }else{
      echo 0;
      }
    }


}
