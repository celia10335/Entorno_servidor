<?php

include "./Soporte.php";

class Juego extends Soporte{

    // Atributos:
    public string $consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;



    // Constructores:
    public function __construct(string $titulo, string $numero, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores){
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }


    // Getters:
    public function getConsola() : string {
        return $this->consola;
    }

    public function getMinJugadores() : int {
        return $this->minNumJugadores;
    }

    public function getMaxJugadores() : int {
        return $this->maxNumJugadores;
    }



    // Otros métodos
    public function muestraResumen(){
        echo "Videojuego:<br>";
        parent::muestraResumen();
        echo "<br>Consola: ".$this->getConsola()."<br>Número mínimo de jugadores: ".$this->getMinJugadores()."<br>Número máximo de jugadores: ".$this->getMaxJugadores();
    }

}

?>