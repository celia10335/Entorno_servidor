<?php

class Controlador{
    public $vista = "list";
    public $objetoTabla;


    public function __construct(){

    }


    public function list(){
        $this->vista = "list";
        $this->objetoTabla;
    }

    public function edit(){
        $this->vista = "edit";
    }
}

?>