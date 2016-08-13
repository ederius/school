<?php


class Horario {
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



        public function crearHorario($jornada,$cursosAlumnos,$f11,$f12,$f13,$f14,$f15,$f16,$f17,$f21,$f22,$f23,$f24,$f25,$f26,$f27,
        $f31,$f32,$f33,$f34,$f35,$f36,$f37,$f41,$f42,$f43,$f44,$f45,$f46,$f47,
        $f61,$f62,$f63,$f64,$f65,$f66,$f67,$f71,$f72,$f73,$f74,$f75,$f76,$f77){

            try {

                $query = $this->db->prepare(' insert into horario values("",'.$jornada.','.$cursosAlumnos.',
                "'.$f11.'","'.$f12.'","'.$f13.'","'.$f14.'","'.$f15.'","'.$f16.'","'.$f17.'",
                 "'.$f21.'","'.$f22.'","'.$f23.'","'.$f24.'","'.$f25.'","'.$f26.'","'.$f27.'",
                  "'.$f31.'","'.$f32.'","'.$f33.'","'.$f34.'","'.$f35.'","'.$f36.'","'.$f37.'",
                   "'.$f41.'","'.$f42.'","'.$f43.'","'.$f44.'","'.$f45.'","'.$f46.'","'.$f47.'",
                    "'.$f61.'","'.$f62.'","'.$f63.'","'.$f64.'","'.$f65.'","'.$f66.'","'.$f67.'",
                     "'.$f71.'","'.$f72.'","'.$f73.'","'.$f74.'","'.$f75.'","'.$f76.'","'.$f77.'"  ) ');
                $e=$query->execute();
                }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            if($query){
             echo'<div class="center-aligner center light-blue white-text btn">Guardado!!</div>';
            }
        }

public function consultarEstadoHorario($curso,$jornada){

      try {
            $query = 'select * from horario where idjornada = '.$jornada.' and idcurso ='.$curso.'';
          }
      catch(PDOException $e){
            echo $e->getMessage();
          }
          if ( $this->db->query($query)) {
            echo 1;
          }else {
            echo 0;
          }
}


}
