<?php
require("../lib/PHPMailer/PHPMailerAutoload.php");

class Mail
{
    public $servidor = "localhost";
    public $usuario = "root";
    public $contra = "";
    public $tipo = "mysql";


    public function __construct()
    {

        try {
            $this->db = new PDO('mysql:host=localhost;dbname=school;', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        };
    }


    public function mailxcurso($idcurso,$asuntoxcurso,$mensajeAcudientexCurso)
    {


        $query = $this->db->prepare(' select acudiente.email from alumno, acudiente, curso
                                      where alumno.idcurso=curso.idcurso and alumno.idalumno = acudiente.idalumno
                                      and alumno.idcurso='.$idcurso.' ');
        $query->execute();
        $resultado = $query->fetchAll();
        $i=0;
        foreach($resultado as $correo){
                /*
                Primero, obtenemos el listado de e-mails
                desde nuestra base de datos y la incorporamos a un Array.
                */
            $array = array();
            $array = $correo;

                /*
                Incluimos el PHPMailerAutoload, que se encarga de incorporar
                a nuestro código, todos los archivos necesarios para utilizar la librería.
                Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
                */
                $mail = new PHPMailer;
                // Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
                $mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
                $mail->Host = 'smtp.gmail.com'; // El Host de Mandrill
                $mail->Port = 587;  // El puerto que Mandrill nos indica utilizar
                $mail->SMTPAuth = true; // Indicamos que vamos a utilizar auteticación SMTP
                $mail->Username = 'ederitodiaz@gmail.com'; // Nuestro usuario en Mandrill
                $mail->Password = 'ederius910101141'; // Key generado por Mandrill
                $mail->SMTPSecure = 'tls'; // Activamos el cifrado tls (también ssl)
                // Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
                $mail->From = 'sistemas@chonkay.com'; // Nuestro correo electrónico
                $mail->FromName = 'Institucion Educativa Chon Kay'; // El nombre de nuestro sitio o proyecto
                $mail->IsHTML(true); // Indicamos que el email tiene formato HTML
                $mail->Subject = utf8_decode($asuntoxcurso); // El asunto del email
                $mail->Body = ''.utf8_decode($mensajeAcudientexCurso).'';
                // Recorremos nuestro array de e-mails.
                foreach ($array as $email) {
                    $mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
                    $mail->Send(); // Realiza el envío =)
                    $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
                }

    }
        echo '<div class="center-aligner center blue white-text btn">Mensaje enviado!</div>';

    }



    public function mailxJornada($jornada,$asuntoxjornada,$mensajeAcudientexJornada)
    {


        $query = $this->db->prepare(' select acudiente.email from alumno, acudiente, curso
                                      where alumno.idcurso=curso.idcurso and alumno.idalumno = acudiente.idalumno
                                      and alumno.idjornada='.$jornada.' ');
        $query->execute();
        $resultado = $query->fetchAll();
        $i=0;
        foreach($resultado as $correo){

            /*
            Primero, obtenemos el listado de e-mails
            desde nuestra base de datos y la incorporamos a un Array.
            */
            $array = array();
            $array = $correo;

            /*
            Incluimos el PHPMailerAutoload, que se encarga de incorporar
            a nuestro código, todos los archivos necesarios para utilizar la librería.
            Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
            */
            $mail = new PHPMailer;
            // Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
            $mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
            $mail->Host = 'smtp.gmail.com'; // El Host de Mandrill
            $mail->Port = 587;  // El puerto que Mandrill nos indica utilizar
            $mail->SMTPAuth = true; // Indicamos que vamos a utilizar auteticación SMTP
            $mail->Username = 'ederitodiaz@gmail.com'; // Nuestro usuario en Mandrill
            $mail->Password = 'ederius910101141'; // Key generado por Mandrill
            $mail->SMTPSecure = 'tls'; // Activamos el cifrado tls (también ssl)
            // Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
            $mail->From = 'sistemas@chonkay.com'; // Nuestro correo electrónico
            $mail->FromName = 'Institucion Educativa Chon Kay'; // El nombre de nuestro sitio o proyecto
            $mail->IsHTML(true); // Indicamos que el email tiene formato HTML
            $mail->Subject = utf8_decode($asuntoxjornada); // El asunto del email
            $mail->Body = ''.utf8_decode($mensajeAcudientexJornada).'';
            // Recorremos nuestro array de e-mails.
            foreach ($array as $email) {
                $mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
                $mail->Send(); // Realiza el envío =)
                $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
            }

        }
        echo '<div class="center-aligner center blue white-text btn">Mensaje enviado!</div>';

    }

    public function mailxtodos($asuntoxtodos,$mensajeAcudientextodos)
    {


        $query = $this->db->prepare(' select acudiente.email from alumno, acudiente, curso
                                      where alumno.idcurso=curso.idcurso and alumno.idalumno = acudiente.idalumno
                                       ');
        $query->execute();
        $resultado = $query->fetchAll();
        $i=0;
        foreach($resultado as $correo){

            /*
            Primero, obtenemos el listado de e-mails
            desde nuestra base de datos y la incorporamos a un Array.
            */
            $array = array();
            $array = $correo;

            /*
            Incluimos el PHPMailerAutoload, que se encarga de incorporar
            a nuestro código, todos los archivos necesarios para utilizar la librería.
            Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
            */
            $mail = new PHPMailer;
            // Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
            $mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
            $mail->Host = 'smtp.gmail.com'; // El Host de Mandrill
            $mail->Port = 587;  // El puerto que Mandrill nos indica utilizar
            $mail->SMTPAuth = true; // Indicamos que vamos a utilizar auteticación SMTP
            $mail->Username = 'ederitodiaz@gmail.com'; // Nuestro usuario en Mandrill
            $mail->Password = 'ederius910101141'; // Key generado por Mandrill
            $mail->SMTPSecure = 'tls'; // Activamos el cifrado tls (también ssl)
            // Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
            $mail->From = 'sistemas@chonkay.com'; // Nuestro correo electrónico
            $mail->FromName = 'Institucion Educativa Chon Kay'; // El nombre de nuestro sitio o proyecto
            $mail->IsHTML(true); // Indicamos que el email tiene formato HTML
            $mail->Subject =utf8_decode($asuntoxtodos); // El asunto del email
            $mail->Body = ''.utf8_decode($mensajeAcudientextodos).'';
            // Recorremos nuestro array de e-mails.
            foreach ($array as $email) {
                $mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
                $mail->Send(); // Realiza el envío =)
                $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
            }

        }
        echo '<div class="center-aligner center blue white-text btn">Mensaje enviado!</div>';

    }

}
