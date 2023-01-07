<?php

require_once 'modelo/notas.php';

// Declaramos la clase "Controlador". Tendrá como atributos la vista a mostrar y el método de la clase "NoteTable" que corresponda a esa vista. El resultado de ese método se almacena en el atributo "objetoNotas".
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


    // Mostrar notas almacenadas
    public function list()
    {
        $this->titulo_pag = "Listado de notas";
        return $this->objetoNotas->getNotes();
    }

    // Insertar nota
    public function insert()
    {
        $this->vista = "insert";
        $this->titulo_pag = "Crear nota";
        if (isset($_POST['title']) || isset($_POST['content'])) {
            $this->objetoNotas->newNotes($_POST['title'], $_POST['content']);
            return $this->list();
        }
    }


    // Modificar una nota. Para eso se utilizan dos métodos: uno que recoge la información de la nota seleccionada, y otro con la sentencia "UPDATE".
    public function edit()
    {
        $this->vista = "edit";
        $this->titulo_pag = "Editar nota";
        return $this->objetoNotas->getById($_GET['id']);
    }

    public function actualizar()
    {
        $this->vista = "actualizar";
        $this->titulo_pag = "Actualizar nota";
        return $this->objetoNotas->actualizar($_POST['id'], $_POST['title'], $_POST['content']);
    }

    // Eliminar una nota. Opcionalmente, se ha creado un método auxiliar que confirma o cancela el borrado
    public function confirm()
    {
        $this->vista = "confirmar";
        $this->titulo_pag = "Eliminar nota";
    }

    public function delete()
    {
        $this->vista = "borrar";
        $this->titulo_pag = "Eliminar nota";
        return $this->objetoNotas->deleteNote($_GET['id']);
    }
}