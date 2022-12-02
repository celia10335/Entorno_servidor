<?php

include_once "./constantes/config.php";

class Db
{
    private string $host;
    private string $dbname;
    private string $usuario;
    private string $passw;
    public $conection;


public function _construct(){

    $this->host = constant('DB_HOST');
    $this->dbname = constant('DB_NAME');
    $this->usuario = constant('DB_USER');
    $this->passw = constant('DB_PASSWD');
    $this->conection = new mysqli($this->host, $this->usuario, $this->passw, $this->dbname);

    if ($this->conection->connect_error){
        die("Conexión fallida: ".$this->conection->connect_error);
    }
}

}
?>