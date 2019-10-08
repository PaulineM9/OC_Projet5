<?php
require_once('models/Manager.php');

class ProjectsManager extends Manager
{
    private $_db;

    public function __construct()
    {
        try {
            $this->_db = new PDO(
                'mysql:host=localhost;dbname=projet_5;charset=utf8',
                'root',
                'root',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $e) {
            die('erreur : ' . $e->getMessage());
        }
    }

    public function get($id) 
    {
        $req = $this->_db->prepare('SELECT * FROM projects WHERE id = ?');
        $req->execute([
            $id
        ]);
        $projects = $req->fetch(); 

        return new Projects($projects);
    }

    public function getList()
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM projects ORDER BY id');
        $data = $req->execute();
        
        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $list [] = new Projects($data);
        }
        // var_dump($list);  
        return $list;
    }

    public function addProject(Projects $project) 
    {
        $req = $this->_db->prepare('INSERT INTO projects (title, description, link) VALUES ( ?, ?, ?)');
        $req->execute([
            $project->getTitle(), 
            $project->getDescription(), 
            $project->getLink(),
        ]);
    }

}