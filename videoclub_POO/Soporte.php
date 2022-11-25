<?php
class Soporte{
 
    // Atributos:
    public string $titulo;
    protected int $numero;
    private float $precio;
    private static float $iva = 0.21;
    public static function getIva() : float{
        return self::$iva;
    }
    



    // Constructores:
    public function __construct(string $titulo, int $numero, float $precio){
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    

    // Getters:
    public function getPrecio() : float {
        return $this->precio;
    }

    public function getPrecioConIva() : float {
        return round($this->precio*($this->getIva() + 1), 2);
    }

    public function getNumero() : int {
        return $this->numero;
    } 




    // Otros métodos:
    public function muestraResumen() {
        echo "<em>".$this->titulo."</em><br>".$this->getPrecio()." € (IVA no incluido)";
    }
}

?>