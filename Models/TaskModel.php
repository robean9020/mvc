<?php


namespace myvendor\Models;
use myvendor\Core\Model;

class TaskModel extends Model
{
    private $title;
    private $description;
    private $id;

    public function getModel(){
        return $this->getProperties();
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setId($id){
        $this->id = $id;
    }
}