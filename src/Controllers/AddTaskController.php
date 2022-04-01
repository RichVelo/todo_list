<?php

namespace App\Controllers;

class AddTaskController
{
    protected $taskListModel;
    protected $renderer;

    public function __construct($taskListModel, $renderer)
    {
        $this->taskListModel = $taskListModel;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $newTask = $request->getParsedBody();

        $taskTitle = $newTask['taskTitle'];

        $addTask = $this->taskListModel->addNewTask($taskTitle);

        return $response->withHeader('Location', '/');
    }
}