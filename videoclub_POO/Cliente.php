<?php

class Cliente{
    // Atributos:
    public string $nombre;
    private string $numero;
    private array $soportesAlquilados = array();
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente;


    // Constructores:
    public function __construct(string $nombre, string $numero, int $maxAlquilerConcurrente = 3){
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    
    // Getters y setters:
    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre_nuevo){
        $this->nombre = $nombre_nuevo;
    }

    public function getNumSoportesAlquilados() : int{
        return $this->numSoportesAlquilados;
    }



    // Otros métodos:
    public function muestraResumen(){
        echo "Cliente: ".$this->nombre.",soportes en alquiler: ".count($this->soportesAlquilados);
    }
}

?>