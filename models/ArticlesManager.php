<?php
require_once('models/Manager.php');

class ArticlesManager extends Manager
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

    public function addArticle(Articles $articles) // créé un article et insère les informations en post / get dans la BDD
    {
        $req = $this->_db->prepare('INSERT INTO articles (title, date_article, content) VALUES ( ?, NOW(), ?)');
        $req->execute([
            $articles->getTitle(),
            $articles->getContent(),
        ]);
    }

    public function get($id) // récupère les articles dans la BDD 
    {
        $req = $this->_db->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([
            $id
        ]);
        $articles = $req->fetch(); // récupère les données et les stocke dans la variable $articles sous forme de tableau clé / valeur qui récupère de la bdd

        return new Articles($articles);
    }

    public function getList() // on créé une liste dans laquelle on récupère tous les articles pour les afficher
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

    public function getCount() // permet de compter les articles écrits
    {
        $req = $this->_db->prepare('SELECT COUNT(id) as nbArt FROM articles');
        $req->execute();
        $data = $req->fetch();

        return $data['nbArt'];
    }

    public function getArticleForPagination($perPage2, $perPage) // permet l'affichage en pagination
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles LIMIT ' . $perPage2 . ', ' . $perPage . '');
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Articles($data);
        }

        return $list;
    }
}
