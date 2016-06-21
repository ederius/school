<?php
/**
 * Created by PhpStorm.
 * Date: 22/10/15
 * Time: 08:10 PM
 */

class Db{
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






}


