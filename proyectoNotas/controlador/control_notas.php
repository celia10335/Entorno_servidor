<?php

class Controlador{
    public $vista;
    public $titulo_pag;
    public $objetoNotas;


    public function __construct(){
        public $vista = "list";
        public $titulo_pag = "";
        public $objetoNotas = new NoteTable();
    }


    public function list(){
        $this->titulo_pag = "Listado de notas";
        return $this->objetoNotas->getNotes();
    }

    public function insert(){
        $this->vista = "insert";
        $this->titulo_pag = "Crear nota";
    }

    public function edit(){
        $this->vista = "edit";
    }
}

?>