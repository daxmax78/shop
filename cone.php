<?php
    class Conexion {

        //Se crea una funcion/metodo que nos permite crear la conexion
        public function Conectar(){

            define("host","localhost"); //Lugar
            define("bdname","bases"); //Nombre de la BD  
            define("user","root"); //Usuario
            define("password",""); //Clave

            $opcion = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

            try {

                return $conexion= new PDO("mysql:host=".host."; dbname=".bdname,user,password, $opcion);

            } catch (Exception $e) {
                die("Error de Conexion: ".$e -> getMessage());
            }
        }
    }
?>
