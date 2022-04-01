<?php

namespace App\Models;

class TaskListModel
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `tasks`');
        $query->execute();
        return $query->fetchAll();
    }
}