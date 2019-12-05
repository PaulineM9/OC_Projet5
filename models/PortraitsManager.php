<?php

class PortraitsManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function addPortrait(Portraits $portraits) // créé un portrait et insère les informations en post / get dans la BDD
    {
        $req = $this->_db->prepare('INSERT INTO portraits (title, date_portrait, content) VALUES ( ?, NOW(), ?)');
        $req->execute([
            $portraits->getTitle(),
            $portraits->getContent(),
        ]);
    }

    public function get($id) // récupère les portraits dans la BDD 
    {
        $req = $this->_db->prepare('SELECT * FROM portraits WHERE id = ?');
        $req->execute([
            $id
        ]);
        $portraits = $req->fetch(); // récupère les données et les stocke dans la variable $portraits sous forme de tableau clé / valeur qui récupère de la bdd

        return new Portraits($portraits);
    }

    public function getList() // on créé une liste dans laquelle on récupère tous les portraits pour les afficher
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getLastOnePortrait() // show only the last one portrait into the blog front page 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC LIMIT 0, 1');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getLastTreePortraits() // show only the 3 lasts ones portraits into the blog front page 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC LIMIT 0, 3');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getAllPortraits() // show portraits into a list of archives
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM portraits ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Portraits($data);
        }
        return $list;
    }

    public function getCount() // permet de compter les portraits écrits
    {
        $req = $this->_db->prepare('SELECT COUNT(id) as nbPort FROM portraits');
        $req->execute();
        $data = $req->fetch();

        return $data['nbPort'];
    }

    public function getPortraitForPagination($perPage2, $perPage) // permet l'affichage en pagination
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
