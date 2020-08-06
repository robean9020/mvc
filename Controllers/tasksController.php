<?php

namespace myvendor\Controllers;
use myvendor\Core\Controller;
use myvendor\Models\TaskRepository;

class tasksController extends Controller
{
    function index()
    {
        $tasks = new TaskRepository();
        $data['tasks'] = $tasks->getAll();
        $this->set($data);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task= new TaskRepository();

            if ($task->add($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task= new TaskRepository();

        $d["task"] = $task->get($id);

        if (isset($_POST["title"]))
        {
            if ($task->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskRepository();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}


