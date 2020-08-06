<?php

namespace myvendor\Models;
use myvendor\Core\Model;
use myvendor\Config\Database;
use myvendor\Models\TaskResourceModel;

class TaskRepository extends Model
{
    public function add($title, $description)
    {
        $sql = "INSERT INTO tasks (title, description, created_at, updated_at) VALUES (:title, :description, :created_at, :updated_at)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'title' => $title,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function get($id)
    {
        $sql = "SELECT * FROM tasks WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM tasks";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $title, $description)
    {
        $sql = "UPDATE tasks SET title = :title, description = :description , updated_at = :updated_at WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM tasks WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
