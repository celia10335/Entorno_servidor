<?php

include_once "db.php";
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



class NoteTable
{

    private $tabla = "note";
    public $conection;
    public array $notas = array();
    public function __construct()
    {
    }


    public function getConection()
    {
        $db = new Db();
        $this->conection = $db->conection;
    }


    public function getNotes()
    {
        $this->getConection();
        $sql = "SELECT * FROM " . $this->tabla;
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


    public function newNotes($title, $content)
    {
        $this->getConection();

        $sql = "INSERT INTO " . $this->tabla . " (title, content) VALUES ('" . $title . "','" . $content . "')";
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $this->notas[0] = new Nota($row["id"], $row["title"], $row["content"]);
            }
        }

        // if ($this->conection->query($sql) === true) {
        //     echo "Nueva nota creada";
        // } else {
        //     echo "Error" . $sql . "<br>" . $this->conection->connect_error;
        // }

    }


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


    public function actualizar($id, $nuevo_titulo, $nuevo_contenido){
        $this->getConection();
        $sql = "UPDATE" . $this->tabla . "SET title=".$nuevo_titulo.", content=".$nuevo_contenido." WHERE id = " . $id;
        $result = $this->conection->query($sql);
        return $result;
    }


    public function deleteNote($id)
    {
        $this->getConection();

        $sql = "DELETE FROM " . $this->tabla . " WHERE id =" . $id;

        if ($this->conection->query($sql)) {
            $mensaje = "Nota eliminada con éxito";
        } else {
            $mensaje = "Error " . $this->getConection->error;
        }

        return $mensaje;
    }
}
