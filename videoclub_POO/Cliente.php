<?php
include_once "./Soporte.php";

class Cliente
{
    // Atributos:
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = array();
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente;


    // Constructores:
    public function __construct(string $nombre, int $numero, int $maxAlquiler = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquiler;
    }


    // Getters y setters:
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre_nuevo)
    {
        $this->nombre = $nombre_nuevo;
    }

    public function getNumSoportesAlquilados(): int
    {
        return $this->numSoportesAlquilados;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }




    // Otros métodos:
    public function muestraResumen()
    {
        echo "Cliente: " . $this->nombre . ",soportes en alquiler: " . count($this->soportesAlquilados).", máximo de soportes permitidos: ".$this->maxAlquilerConcurrente."<br>";
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }

    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo "<br>Este producto ya está alquilado por este cliente";
            return false;
        } else if (count($this->soportesAlquilados) < $this->maxAlquilerConcurrente) {
            echo "<br>El cliente " . $this->getNombre() . " está alquilando " . $s->titulo;
            array_push($this->soportesAlquilados, $s);
            $this->numSoportesAlquilados++;
            return true;
        } else {
            echo "<br>El cliente ha alcanzado el máximo de productos prestados en el mismo periodo";
            return false;
        }
    }

    // Hace un recuento de los soportes que tiene alquilados actualmente y los muestra
    public function listarAlquileres(): void
    {
        echo "<br>Cliente " . $this->nombre . ", número de soportes alquilados: " . count($this->soportesAlquilados)."<br>";

        foreach ($this->soportesAlquilados as $s) {
            echo $s->muestraResumen();
        }
    }


    public function devolver(int $numSoporte): bool
    {
        if (count($this->soportesAlquilados) != 0) {

            for ($i = 0; $i < count($this->soportesAlquilados); $i++) {
                if ($this->soportesAlquilados[$i]->getNumero() == $numSoporte) {
                    echo "<br>Soporte devuelto correctamente.";
                    unset($this->soportesAlquilados[$i]);
                    return true;
                } else {
                    echo "<br>Este soporte no figura como prestado, no es posible devolverlo.";
                    return false;
                }
            }

        } else {
            echo "<br>Este soporte no figura como prestado, no es posible devolverlo.";
            return false;
        }
    }
}
