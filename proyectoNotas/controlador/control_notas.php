<?php

class Controlador{
    public $vista = "list";
    public $objetoTabla = new NoteTable();


    public function __construct(){

    }


    public function list(){
        $this->vista = "list";
        $this->objetoTabla->getNotes();
    }

    public function edit(){
        $this->vista = "edit";
    }
}

?>