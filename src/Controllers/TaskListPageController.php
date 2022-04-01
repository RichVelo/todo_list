<?php
namespace App\Controllers;

class TaskListPageController
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
        $tasks = $this->taskListModel->getAllTasks();
        $data = ['tasks' => $tasks];
        return $this->renderer->render($response, 'index.php', $data);
    }
}
