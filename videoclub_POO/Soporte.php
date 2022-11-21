<?php
class Soporte{
 
    public string $nombre;
    protected string $numero;
    private float $precio;
    private static $iva = 0.21;

    

    public function getPrecio() : float {
        return $this->precio;
    }

    public function getPrecioConIva() : float {
        return $this->precio*iva;
    }

}

?>