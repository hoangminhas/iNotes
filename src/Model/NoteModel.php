<?php

namespace src\Model;


use PDO;

class NoteModel
{
    protected $konnekter;

    public function __construct()
    {
        $db = new NoteDB();
        $this->konnekter = $db->connectDB();
    }

    public function showAll()
    {
        $sql = "select note.id, title, name from note join note_type nt on note.type_id = nt.id";
        $stmt = $this->konnekter->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function add($data)
    {
        $sql = "INSERT INTO note (title, content, type_id) values (?,?,?)";
        $stmt = $this->konnekter->prepare($sql);
        $stmt->bindParam(1, $data->getTitle());
        $stmt->bindParam(2, $data->getContent());
        $stmt->bindParam(3, $data->getTypeId());
        $stmt->execute();
    }

    public function showDetail($id)
    {
        $sql = "SELECT * FROM note join note_type nt on note.type_id = nt.id where note.id=$id";
        $stmt = $this->konnekter->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM note where id=$id";
        $this->konnekter->query($sql);
    }

    public function updateById($id, $note)
    {
        $this->showDetail($id);
        $sql = "update note join note_type on note.type_id = note_type.id set note.title=?, note_type.name=? where note.id=?";
        $stmt = $this->konnekter->prepare($sql);
        $stmt->bindParam(1, $note['title']);
        $stmt->bindParam(2, $note['content']);
        $stmt->bindParam(3, $id);
        $stmt->execute();
    }
}