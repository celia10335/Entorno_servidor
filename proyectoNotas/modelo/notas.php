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

}



class NoteTable
{

    private $tabla = "note";
    private $conection;
    private array $notas = array();
    public function __construct()
    {

    }


    public function setConection()
    {
        $db = new Db();
        $this->conection = $db->conection;
    }

    public function getNotes()
    {
        $this->setConection();
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
        //return "debug notas";
    }

    public function newNotes()
    {
        $this->setConection();
        
        $sql = "INSERT INTO" . $this->tabla . "(title, content) VALUES ('$_POST[title]','$_POST[content]')";
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->notas[0] = new Nota($row["id"], $row["title"], $row["content"]);
            }
        }

        if ($this->conection->query($sql) === true) {
            echo "Nueva nota creada";
        } else {
            echo "Error" . $sql . "<br>" . $this->conection->connect_error;
        }

        return $this->notas;
    }


}




?>