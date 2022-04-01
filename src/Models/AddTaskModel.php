<?php
namespace App\Models;

class AddTaskModel
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function addNewTask()
    {
        $query = $this->db->prepare('INSERT INTO `tasks`(`taskTitle`) VALUE (:taskTitle)');
        $query->execute([':taskTitle' => $_POST['taskTitle']]);
        return $query->fetchAll();
    }
}