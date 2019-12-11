<?php
namespace Models;

use \PDO;
use Models\Manager;
use Models\Articles;

class ArticlesManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function addArticle(Articles $articles) // create an article
    {
        $req = $this->_db->prepare('INSERT INTO articles (title, date_article, content) VALUES ( ?, NOW(), ?)');
        $req->execute([
            $articles->getTitle(),
            $articles->getContent(),
        ]);
    }

    public function get($id) // get all articles in bdd
    {
        $req = $this->_db->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([
            $id
        ]);
        $articles = $req->fetch(); 

        return new Articles($articles);
    }

    public function getList() // create a list for all articles
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }
        return $list;
    }

    public function getLastOneArticle() // show only the last one article into the blog front page 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 0, 1');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }
        return $list;
    }

    public function getLastTreeArticles() // show only the 3 lasts ones article into the blog front page 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 0, 3');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }
        return $list;
    }

    public function getAllArticles() // show articles into a list of archives
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles ORDER BY id DESC');
        $data = $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }
        return $list;
    }

    public function getCount() // count all the articles
    {
        $req = $this->_db->prepare('SELECT COUNT(id) as nbArt FROM articles');
        $req->execute();
        $data = $req->fetch();

        return $data['nbArt'];
    }

    public function getArticleForPagination($perPage2, $perPage) // get pagination 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles LIMIT ' . $perPage2 . ', ' . $perPage . '');
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }

        return $list;
    }

    public function update(Articles $articles)
    {
        $req_modif = $this->_db->prepare('UPDATE articles SET title = :title, content = :content  WHERE id = :id');
        $req_modif->execute([
            'id' => $articles->getId(),
            'title'  => $articles->getTitle(),
            'content' => $articles->getContent()
        ]);
    }
}
