<?php

include_once "./Soporte.php";

class CintaVideo extends Soporte{
 
    // Atributos:
    private int $duracion;
    



    // Constructores:
    public function __construct(string $titulo, int $numero, float $precio, int $duracion){
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    

    // Getters:
    public function getDuracion() : int {
        return $this->duracion;
    }





    // Otros métodos:
    public function muestraResumen() {
        echo "<strong><br>Película en cinta de vídeo:</strong><br>";
        parent::muestraResumen();
        echo "<br>Duración: ".$this->duracion;
    }
}

?>