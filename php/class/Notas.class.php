<?php


class Notas {
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


    public function InsertarNotasxMaterias($idnota,$notaMatematica,$descripMatematica,$NotaEstadistica,$descripEstadistica,$notaGeografia,
                                           $descripGeografia,$notaGeometria,$descripGeometria,$notaHistoria,$descripHistoria,
                                           $notaEspañol,$descripEspañol,$notaIngles,$descripIngles,$notaInformatica,
                                           $descripInformatica,$notaArte,$descripArte,$notaUrbanidad,$descripUrbanidad,
                                           $notaDeportes,$descripDeportes,$notaEtica,$descripEtica,$notaBiologia,$descripBiologia,
                                           $notaQuimica,$descripQuimica,$notaFisica,$descripFisica,$notaReligion,$descripReligion,
                                           $notaTrigonometria,$descripTrigonometria,$notaCienciasPoliticas,$descripCienciasPoliticas,
                                           $notaEmprendimiento,$descripEmprendimiento,$notaDemocracia,$descripDemocracia,
                                           $notaAlgebra,$descripAlgebra,$notaNaturales,$descripNaturales)
    {
        try {
            $id="";
            $query = $this->db->prepare(' insert into notaxmateria values("'.$idnota.'","'.$notaMatematica.'","'.$descripMatematica.'",
                                            "'.$NotaEstadistica.'","'.$descripEstadistica.'","'.$notaGeografia.'",
                                           "'.$descripGeografia.'","'.$notaGeometria.'","'.$descripGeometria.'"
                                           ,"'.$notaHistoria.'","'.$descripHistoria.'",
                                           "'.$notaEspañol.'","'.$descripEspañol.'","'.$notaIngles.'","'.$descripIngles.'","'.$notaInformatica.'",
                                           "'.$descripInformatica.'","'.$notaArte.'","'.$descripArte.'","'.$notaUrbanidad.'","'.$descripUrbanidad.'",
                                           "'.$notaDeportes.'","'.$descripDeportes.'","'.$notaEtica.'","'.$descripEtica.'","'.$notaBiologia.'","'.$descripBiologia.'",
                                           "'.$notaQuimica.'","'.$descripQuimica.'","'.$notaFisica.'","'.$descripFisica.'","'.$notaReligion.'","'.$descripReligion.'",
                                           "'.$notaTrigonometria.'","'.$descripTrigonometria.'","'.$notaCienciasPoliticas.'","'.$descripCienciasPoliticas.'",
                                           "'.$notaEmprendimiento.'","'.$descripEmprendimiento.'","'.$notaDemocracia.'","'.$descripDemocracia.'",
                                           "'.$notaAlgebra.'","'.$descripAlgebra.'","'.$notaNaturales.'","'.$descripNaturales.'") ');
            $e=$query->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if(!$query){
            echo '<div class="center-aligner center  light-blue white-text btn">Notas Guardadas!!</div>';

        }
    }


    public function InsertarNota($idalumno,$idcurso,$idperiodo){
                 $id = "";
        try {
            $query = $this->db->prepare('select * from notas where idalumno='.$idalumno.' and idperiodo='.$idperiodo.' ');
            $query->execute(array( 'idalumno' => $idalumno, 'idperiodo' => $idperiodo));
            $resultado = $query->fetchAll();
foreach($resultado as $re){}

            if(isset($re)){
                echo"1";
            }
            if(!isset($re))
            {
                $query = $this->db->prepare(' insert into notas values( "", '.$idalumno.', '.$idcurso.', '.$idperiodo.') ');
                $query->execute(array( 'idalumno' => $idalumno, 'idcurso' => $idcurso, 'idperiodo' => $idperiodo));
                $resultado = $query->fetchAll();
                echo "2";

            }

            }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function consultarUltimaNota()
    {
        $query = $this->db->prepare('select * from notas order by idnota DESC LIMIT 1');
        $query->execute();
        $resultado = $query->fetchAll();
        foreach ($resultado as $nota) {
           return ($nota['idnota']);
        }
    }


    public function consultarNotas($idalumno, $periodo)
    {
        $query = $this->db->prepare(' select * from notas, notaxmateria where notas.idnota=notaxmateria.idnota and  idalumno=:idalumno and idperiodo=:idperiodo');
        $query->execute(array( 'idalumno' => $idalumno, 'idperiodo' => $periodo));
        $resultado = $query->fetchAll();
        foreach($resultado as $nota){}
        return ($nota);
    }







    public function actualizarNotasxMaterias($idalumno,$periodo,$notaMatematicas,$descripMatematicas,$NotaEstadistica,$descripEstadistica,$notaGeografia,
                                               $descripGeografia,$notaGeometria,$descripGeometria,$notaHistoria,$descripHistoria,
                                               $notaEspañol,$descripEspañol,$notaIngles,$descripIngles,$notaInformatica,
                                               $descripInformatica,$notaArte,$descripArte,$notaUrbanidad,$descripUrbanidad,
                                               $notaDeportes,$descripDeportes,$notaEtica,$descripEtica,$notaBiologia,$descripBiologia,
                                               $notaQuimica,$descripQuimica,$notaFisica,$descripFisica,$notaReligion,$descripReligion,
                                               $notaTrigonometria,$descripTrigonometria,$notaCienciasPoliticas,$descripCienciasPoliticas,
                                               $notaEmprendimiento,$descripEmprendimiento,$notaDemocracia,$descripDemocracia,
                                               $notaAlgebra,$descripAlgebra,$notaNaturales,$descripNaturales)
    {
        try {
            $id="";

            $query = $this->db->prepare(' select * from notas where idalumno=:idalumno and idperiodo=:idperiodo');
            $query->execute(array( 'idalumno' => $idalumno, 'idperiodo' => $periodo));
            $resultado = $query->fetchAll();
            foreach ($resultado as $nota) {  }


            $query = $this->db->prepare('
                                         UPDATE `notaxmateria` SET
                                        `notaMatematicas`='.$notaMatematicas.',`descripcionMatematicas`="'.$descripMatematicas.'",
                                        `notaEstadistica`='.$NotaEstadistica.',`descripcionEstadistica`="'.$descripEstadistica.'",
                                        `notaGeografia`='.$notaGeografia.',`descripcionGeografia`="'.$descripGeografia.'",
                                        `notaGeometria`='.$notaGeometria.',`descripcionGeometria`="'.$descripGeometria.'",
                                        `notaHistoria`='.$notaHistoria.',`descripcionHistoria`="'.$descripHistoria.'",
                                        `notaEspanol`='.$notaEspañol.',`descripcionEspanol`="'.$descripEspañol.'",
                                        `notaIngles`='.$notaIngles.',`descripcionIngles`="'.$descripIngles.'",
                                        `notaInformatica`='.$notaInformatica.',`descripcionInformatica`="'.$descripInformatica.'",
                                        `notaArte`='.$notaArte.',`descripcionArte`="'.$descripArte.'",
                                        `notaUrbanidad`='.$notaUrbanidad.',`descripcionUrbanidad`="'.$descripUrbanidad.'",
                                        `notaDeportes`='.$notaDeportes.',`descripcionDeportes`="'.$descripDeportes.'",
                                        `notaEtica`='.$notaEtica.',`descripcionEtica`="'.$descripEtica.'",
                                        `notaBiologia`='.$notaBiologia.',`descripcionBiologia`="'.$descripBiologia.'",
                                        `notaQuimica`='.$notaQuimica.',`descripcionQuimica`="'.$descripQuimica.'",
                                        `notaFisica`='.$notaFisica.',`descripcionFisica`="'.$descripFisica.'",
                                        `notaReligion`='.$notaReligion.',`descripcionReligion`="'.$descripReligion.'",
                                        `notaTrigonometria`='.$notaTrigonometria.',`descripcionTrigonometria`="'.$descripTrigonometria.'",
                                        `notaCienciasPoliticas`='.$notaCienciasPoliticas.',`descripcionCienciasPoliticas`="'.$descripCienciasPoliticas.'",
                                        `notaEmprendimiento`='.$notaEmprendimiento.',`descripcionEmprendimiento`="'.$descripEmprendimiento.'",
                                        `notaDemocracia`='.$notaDemocracia.',`descripcionDemocracia`="'.$descripDemocracia.'",
                                        `notaAlgebra`='.$notaAlgebra.',`descripcionAlgebra`="'.$descripAlgebra.'",
                                        `notaNaturales`='.$notaNaturales.',`descripcionNaturales`="'.$descripNaturales.'"
                                         WHERE idnota='.$nota["idnota"].'

                                        ');
            $query->execute();
            if(!$query){
                echo"1";
            }
            else
            {
                echo "2";
            }

        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }


    public function verificarRegistroNotas($idalumno,$periodo){

        $query = $this->db->prepare(' select * from notas where idalumno=:idalumno and idperiodo=:idperiodo');
        $query->execute(array( 'idalumno' => $idalumno, 'idperiodo' => $periodo));
        $resultado = $query->fetchAll();
        foreach($resultado as $nota){}
        return ($nota);


    }



}
