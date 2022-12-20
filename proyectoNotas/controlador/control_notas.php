<?php

require_once 'modelo/notas.php';

class Controlador
{
    public $vista;
    public $titulo_pag;
    public $objetoNotas;


    public function __construct()
    {
        $this->vista = "list";
        $this->titulo_pag = "";
        $this->objetoNotas = new NoteTable();
    }


    public function list()
    {
        $this->titulo_pag = "Listado de notas";
        return $this->objetoNotas->getNotes();
    }

    public function insert()
    {
        $this->vista = "insert";
        $this->titulo_pag = "Crear nota";
        return $this->objetoNotas->newNotes($_POST['title'], $_POST['content']);
    }

    public function edit()
    {
        $this->vista = "edit";
        $this->titulo_pag = "Editar nota";
        return $this->objetoNotas->getById($_GET['id']);
    }

    // function actualizar(){

    // }

    public function delete()
    {
        $this->vista = "borrar";
        $this->titulo_pag = "Eliminar nota";
        return $this->objetoNotas->deleteNote($_GET['id']);
    }
}
