<?php

namespace src\Controller;

class Note implements NoteInterface
{
    protected $typeId;
    protected $title;
    protected $content;

    /**
     * @param $typeId
     * @param $title
     * @param $content
     */
    public function __construct($typeId, $title, $content)
    {
        $this->typeId = $typeId;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId): void
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function save()
    {
        // TODO: Implement save() method.


    }

    public function delete()
    {
        // TODO: Implement delete() method.
        return "location.href = 'index.php?page=note-list';";

    }
}