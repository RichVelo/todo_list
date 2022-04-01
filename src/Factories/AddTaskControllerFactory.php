<?php
namespace App\Factories;

use App\Controllers\AddTaskController;

class AddTaskControllerFactory
{
    public function __invoke($container)
    {
        $addTaskModel = $container->get('taskListModel');
        $renderer = $container->get('renderer');
        return new AddTaskController($addTaskModel, $renderer);
    }
}