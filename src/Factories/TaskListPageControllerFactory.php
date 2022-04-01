<?php
namespace App\Factories;

use App\Controllers\TaskListPageController;

class TaskListPageControllerFactory
{
    public function __invoke($container)
    {
        $taskListModel = $container->get('taskListModel');
        $renderer = $container->get('renderer');
        return new TaskListPageController($taskListModel, $renderer);
    }
}