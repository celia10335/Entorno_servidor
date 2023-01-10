<?php

include_once "db.php";

// Definición de la clase "Nota", que tendrá sólo los atributos básicos, un constructor y, si los atributos son privados, métodos para acceder a ellos
class Nota
{
    public $id;
    public $titulo;
    public $contenido;



    public function __construct($id, $titulo, $contenido)
    {

        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}


// Definición de la clase "NoteTable", que llamará a la base de datos para crear, modificar, eliminar o leer notas. Tendrá métodos para cada una de estas funciones y algunos auxiliares
class NoteTable
{

    private $tabla = "note";
    public $conection;
    public array $notas = array();
    public function __construct()
    {
    }


    // Establecer conexión con la base de datos
    public function getConection()
    {
        $db = new Db();
        $this->conection = $db->conection;
    }


    // Obtener todas las notas existentes para mostrarlas en el listado
    public function getNotes()
    {
        $this->getConection();
        $sql = "SELECT * FROM note";
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $this->notas[$i] = new Nota($row["id"], $row["title"], $row["content"]);
                $i++;
            }
        }

        return $this->notas;
    }


    // Insertar nueva nota. Con los datos recogidos en el formulario, se instancia un nuevo objeto "nota"
    public function newNotes($title, $content)
    {
        $this->getConection();

        $sql = "INSERT INTO " . $this->tabla . " (title, content) VALUES ('" . $title . "','" . $content . "')";
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->notas[0] = new Nota($row["id"], $row["title"], $row["content"]);
            }
        }
    }


    // Obtener los datos de un objeto "nota" a partir de su id. Los datos se muestran en los campos del formulario para ser modificados
    public function getById($id)
    {
        $this->getConection();

        $sql = "SELECT * from " . $this->tabla . " WHERE id = " . $id;
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->notas[0] = new Nota($id, $row["title"], $row["content"]);
            }
        }

        return $this->notas;
    }


    // Actualizar la base de datos a partir de los datos introducidos en el formulario
    public function actualizar($id, $nuevo_titulo, $nuevo_contenido)
    {
        $this->getConection();
        $sql = "UPDATE " . $this->tabla . " SET title='" . $nuevo_titulo . "', content='" . $nuevo_contenido . "' WHERE id = '" . $id . "'";

        if ($this->conection->query($sql) === true) {
            return "Actualizado";
        } else {
            return "Ha habido un error";
        }

        $this->conection->close();
    }


    // Eliminar nota
    public function deleteNote($id)
    {
        $this->getConection();

        $sql = "DELETE FROM " . $this->tabla . " WHERE id =" . $id;

        if ($this->conection->query($sql)) {
            $mensaje = "Nota eliminada con éxito";
        } else {
            $mensaje = "Error " . $this->conection->error;
        }

        return $mensaje;
    }
}