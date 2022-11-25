<?php

include_once "./CintaVideo.php";
include_once "./Dvd.php";
include_once "./Juego.php";
include_once "./Cliente.php";


class Videoclub{

    // Atributos:
    private string $nombre;
    private array $productos = array();
    private int $numProductos;
    private array $socios = array();
    private int $numSocios;

    // Constructor
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->numProductos = 0;
        $this->numSocios = 0;
    }

    // Otros métodos
    private function incluirProducto(Soporte $s) : void {
        $this->numProductos++;
        array_push($this->productos, $s);
    }

    public function incluirCintaVideo($titulo, $precio, $duracion) : void {
        $numero = $this->numProductos+1;
        $s = new CintaVideo($titulo, $numero, $precio, $duracion);
        $this->incluirProducto($s);
    }

    public function incluirDvd($titulo, $precio, $idiomas, $pantalla) : void {
        $numero = $this->numProductos+1;
        $s = new Dvd($titulo, $numero, $precio, $idiomas, $pantalla);
        $this->incluirProducto($s);
    }

    public function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ) : void {
        $numero = $this->numProductos+1;
        $s = new Juego($titulo, $numero, $precio, $consola, $minJ, $maxJ);
        $this->incluirProducto($s);
    }

    public function incluirSocio($nombre, $maxAlquilerConcurrente = 3) : void {
        $this->numSocios++;
        $numero = $this->numSocios;
        array_push($this->socios, new Cliente($nombre, $numero, $maxAlquilerConcurrente));
    }

    public function listarProductos() : void {
        echo "<br>Número de soportes en stock: " . count($this->productos)."<br>";

        foreach ($this->productos as $p) {
            echo $p->muestraResumen();
        }
    }

    public function listarSocios() : void {
        echo "<br>Número de socios: " . count($this->socios)."<br>";

        foreach ($this->socios as $soc) {
            echo $soc->muestraResumen()."<br>";
        }
    }

    public function alquilarSocioProducto($numCliente, $numSoporte) : void {

        foreach ($this->socios as $soc) {
            if ($soc->getNumero() == $numCliente){

                foreach ($this->productos as $p) {
                    if ($p->getNumero() == $numSoporte){
                        $soc->alquilar($p);
                    }
                }

            }
        }

    }
}


?>