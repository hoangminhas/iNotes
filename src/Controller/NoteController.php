<?php

namespace src\Controller;

use src\Model\NoteModel;

class NoteController
{
    protected $noteModel;
    protected $note;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
    }

    public function showAllNote()
    {
        $allNote = $this->noteModel->showAll();
        include "src/View/list.php";
    }

    public function addNewNote()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/create.php";
        } else {
            $typeId = $_POST['typeId'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $this->note = new Note($typeId, $title, $content);
            $this->noteModel->add($this->note);
            header("location:index.php?page=note-list");
        }
    }

    public function showDetailNote($id)
    {
        $detailNote = $this->noteModel->showDetail($id);
        include "src/View/detail.php";
    }

    public function deleteNote($id)
    {
        $this->noteModel->delete($id);
        header("location:index.php?page=note-list");
    }

    public function updateNote($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $thisNote = $this->noteModel->showDetail($id);
            include "src/View/update.php";
        } else{
            $note = [
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ];
            $this->noteModel->updateById($id, $note);
            header("location:index.php?page=note-list");
        }
    }
}