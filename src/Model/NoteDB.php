<?php

namespace src\Model;

use PDO;
use PDOException;

class NoteDB
{
    protected $dns;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost;dbname=inotes;charset=utf8";
        $this->username = 'root';
        $this->password = 'root';
    }

    public function connectDB()
    {
        try {
            return new PDO($this->dns, $this->username, $this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}