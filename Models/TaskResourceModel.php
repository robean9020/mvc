<?php


namespace myvendor\Models;

use myvendor\Models\TaskModel;
use myvendor\Core\ResourceModel;
class TaskResourceModel extends ResourceModel
{
    private $model;
    public function __construct(TaskModel $model)
    {
        $this->_init();
    }
}