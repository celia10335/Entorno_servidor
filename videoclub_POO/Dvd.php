<?php

include "./Soporte.php";

class Dvd extends Soporte{

    // Atributos
    public string $idiomas;
    private string $formatPantalla;


    // Constructores
    public function __construct(string $titulo, string $numero, float $precio, string $idiomas, string $formatPantalla){
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }


    // Getters
    public function getIdiomas() : string {
        return $this->idiomas;
    }

    public function getFormatPantalla() : string {
        return $this->formatPantalla;
    }


    // Otros métodos
    public function muestraResumen(){
        echo "Película en DVD:<br>";
        parent::muestraResumen();
        echo "<br>Idiomas: ".$this->getIdiomas()."<br>Formato de pantalla: ".$this->getFormatPantalla();
    }





}


?>