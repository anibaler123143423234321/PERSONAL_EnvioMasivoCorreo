<?php
    session_start();
    /* Iniciamos Clase Conectar */
    class Conectar{
        protected $dbh;

        /* Funcion Protegida de la cadena de Conexion */
        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3306;dbname=masivo_andercode","root","");
                return $conectar;
            }catch(Exception $e){
                /* En Caso hubiera un error en la cadena de conexion */
                print "Error" . $e->getMessage() . "<br>";
                die();
            }
        }

        /* Para impedir que tengamos problemas con las ñ o tildes */
        public function set_names(){
            return $this->conexion()->query("SET NAMES 'utf8'");
        }

        /* Ruta principal del proyecto */
        public static function ruta(){
            return "http://localhost/PERSONAL_EnvioMasivoCorreo_Admin/";
        }
    }
?>