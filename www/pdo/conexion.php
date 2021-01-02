<?php
    
    class classConexion {        
        //private $host = "127.0.0.1";   //sin docker
        private $host = "172.25.0.1:3360";       
        //private $host = "localhost"; => da este error => No such file or directory 
        private $user = "dbuser";
        //private $user = "root";
        private $password = "dbpass";
        private $db = "dbname";        
        private $connect;

        public function __construct() {
            $connectString = "mysql:host=".$this->host.";dbname=".$this->db.";character=utf8";            
            // Check connection            
            try {
                $this -> connect = new PDO($connectString, $this->user, $this->password);
                $this -> connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "conexion exitosa\n";
            } catch (Exception $e) {
                $this -> connect = "error de conexion\n";
                echo "error de conexión: ".$e->getMessage()."\n";
            }
        }
    }
    
    $conexion = new classConexion();

?>