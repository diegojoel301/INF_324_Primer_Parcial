<?php
    class Conexion extends PDO
    {
        private $servidor = "172.17.0.2";
        private $usuario = "root";
        private $clave = "password123";
        private $db = "MIBASEMINOMBRE";
        public function __construct()
        {
            try
            {
                parent::__construct("mysql:host=".$this->servidor.";dbname=".$this->db.";charset=utf8",$this->usuario,$this->clave,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            }
            catch (PDOException $e)
            {
                echo "Error: ".$e->getMessage();
                exit;
            }
            
        }
    }
?>
