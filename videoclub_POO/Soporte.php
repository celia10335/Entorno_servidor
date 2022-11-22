<?php
class Soporte{
 
    // Atributos:
    public string $titulo;
    protected string $numero;
    private float $precio;
    private static float $iva = 0.21;
    public static function getIva() : float{
        return self::$iva;
    }
    



    // Constructores:
    public function __construct(string $titulo, string $numero, float $precio){
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    

    // Getters:
    public function getPrecio() : float {
        return $this->precio;
    }

    public function getPrecioConIva() : float {
        return $this->precio*($this->getIva() + 1);
    }

    public function getNumero() : string {
        return $this->numero;
    } 




    // Otros métodos:
    public function muestraResumen() {
        echo "<em>".$this->titulo."</em><br>".$this->getPrecio()." € (IVA no incluido)";
    }
}

?>