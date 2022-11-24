<?php
class CintaVideo extends Soporte{
 
    // Atributos:
    private int $duracion;
    



    // Constructores:
    public function __construct(string $titulo, string $numero, float $precio, int $duracion){
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    

    // Getters:
    public function getDuracion() : int {
        return $this->duracion;
    }





    // Otros métodos:
    public function muestraResumen() {
        parent::muestraResumen();
        echo "<p>Duración: ".$this->duracion."</p>";
    }
}

?>