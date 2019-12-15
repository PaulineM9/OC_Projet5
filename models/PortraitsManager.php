<?php
namespace Models;

use \PDO; 
use Exception;
use Models\Manager;
use Models\Portraits;

class PortraitsManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function addPortrait(Portraits $portraits) 
    {
        $req = $this->_db->prepare('INSERT INTO portraits (title, date_portrait, content) VALUES ( ?, NOW(), ?)');
        $req->execute([
            $portraits->getTitle(),
            $portraits->getContent(),
        ]);
    }

    public function get($id) 
    {
        $req = $this->_db->prepare('SELECT * FROM portraits WHERE id = ?');
        $req->execute([
            $id
        ]);
        $portraits = $req->fetch(); 

        if ($portraits == false) {
            throw new Exception();
        } else {
            return new Portraits($portraits);
        }
    }

    public function getList() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getLastOnePortrait() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC LIMIT 0, 1');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getLastTreePortraits() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC LIMIT 0, 3');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getAllPortraits() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getCount() 
    {
        $req = $this->_db->prepare('SELECT COUNT(id) as nbPort FROM portraits');
        $req->execute();
        $data = $req->fetch();

        return $data['nbPort'];
    }

    public function getPortraitForPagination($perPage2, $perPage) 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits LIMIT ' . $perPage2 . ', ' . $perPage . '');
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }

        return $list;
    }

    public function update(Portraits $portraits)
    {
        $req_modif = $this->_db->prepare('UPDATE portraits SET title = :title, content = :content  WHERE id = :id');
        $req_modif->execute([
            'id' => $portraits->getId(),
            'title'  => $portraits->getTitle(),
            'content' => $portraits->getContent()
        ]);
    }
}
