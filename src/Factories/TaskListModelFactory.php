<?php
namespace App\Factories;

use App\Models\TaskListModel;

class TaskListModelFactory
{
    public function __invoke($container)
    {
        $db = new \PDO('mysql:host=127.0.0.1;dbname=todolist', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return new TaskListModel($db);
    }
}