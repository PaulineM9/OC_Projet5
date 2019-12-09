<?php
// namespace Oc\Projet_5\Models;

// use \Oc\Projet_5\Models\Manager;
// use \PDO;

class ProjectsManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
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
        $req = $this->_db->prepare('INSERT INTO projects (title, image, description, link) VALUES ( ?, ?, ?, ?)');
        $req->execute([
            $project->getTitle(),
            $project->getImage(), 
            $project->getDescription(), 
            $project->getLink(),
        ]);
    }

}