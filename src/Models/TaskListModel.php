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

    public function addNewTask()
    {
        $query = $this->db->prepare('INSERT INTO `tasks`(`taskTitle`) VALUE (:taskTitle)');
        $query->execute([':taskTitle' => $_POST['taskTitle']]);
        return $query->fetchAll();
    }
}