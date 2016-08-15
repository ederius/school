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

                $query = $this->db->prepare(' insert into horario values("",'.$cursosAlumnos.','.$jornada.',
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
             echo 1;

            }
        }


        public function actualizarHorario($jornada,$curso,$f11,$f12,$f13,$f14,$f15,$f16,$f17,$f21,$f22,$f23,$f24,$f25,$f26,$f27,
        $f31,$f32,$f33,$f34,$f35,$f36,$f37,$f41,$f42,$f43,$f44,$f45,$f46,$f47,
        $f61,$f62,$f63,$f64,$f65,$f66,$f67,$f71,$f72,$f73,$f74,$f75,$f76,$f77){

            try {

                $query = $this->db->prepare(' update horario set
                f11="'.$f11.'",f12="'.$f12.'",f13="'.$f13.'",f14="'.$f14.'",f15="'.$f15.'",f16="'.$f16.'",f17="'.$f17.'",
                f21="'.$f21.'",f22="'.$f22.'",f23="'.$f23.'",f24="'.$f24.'",f25="'.$f25.'",f26="'.$f26.'",f27="'.$f27.'",
                f31="'.$f31.'",f32="'.$f32.'",f33="'.$f33.'",f34="'.$f34.'",f35="'.$f35.'",f36="'.$f36.'",f37="'.$f37.'",
                f41="'.$f41.'",f42="'.$f42.'",f43="'.$f43.'",f44="'.$f44.'",f45="'.$f45.'",f46="'.$f46.'",f47="'.$f47.'",
                f61="'.$f61.'",f62="'.$f62.'",f63="'.$f63.'",f64="'.$f64.'",f65="'.$f65.'",f66="'.$f66.'",f67="'.$f67.'",
                f71="'.$f71.'",f72="'.$f72.'",f73="'.$f73.'",f74="'.$f74.'",f75="'.$f75.'",f76="'.$f76.'",f77="'.$f77.'" where idjornada="'.$jornada.'" and idcurso="'.$curso.'" ');
                $e=$query->execute();
                }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            if($query){
             echo'<div class="center-aligner center light-blue white-text btn">Actualizado!!</div>';
            }
        }


      public function eliminarHorario($jornada, $curso){

        try {

            $query = $this->db->prepare(' delete from horario where idjornada="'.$jornada.'" and idcurso="'.$curso.'" ');
            $e=$query->execute();
            }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        if($query){
         return 1;
        }

      }

      public function consultarEstadoHorario($curso,$jornada){

            $q="";
            try {
                  $query = $this->db->query('select * from horario where idjornada = '.$jornada.' and idcurso ='.$curso.'');
                }
            catch(PDOException $e){
                  echo $e->getMessage();
                }
                foreach ($query as $q) { }
                if ($q['idhorario']!="") {
                  return 1;
                }

    }



    public function consultarHorario($jornada, $curso){

          $q="";
          try {
                $query = $this->db->query('select * from horario where idjornada = '.$jornada.' and idcurso ='.$curso.'');
              }
          catch(PDOException $e){
                echo $e->getMessage();
              }
              foreach ($query as $q) { }

                return $q;


    }



}
