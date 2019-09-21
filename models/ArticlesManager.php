<?php
require_once('Models/Manager.php');

class ArticlesManager extends Manager
{
    private $_db;

    public function __construct()
    {
        try
        {
            $this->_db = new PDO('mysql:host=localhost;dbname=projet_5;charset=utf8', 'root', 'root',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e)
        {
            die('erreur : '.$e->getMessage());
        } 
    }

    public function get($id) // récupère les articles dans la BDD pour les afficher
    {
        $req = $this->_db->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([
            $id
        ]);
        $articles = $req->fetch(); // récupère les données et les stocke dans la variable $chapter sous forme de tableau clé / valeur qui récupère de la bdd
        
        return new Articles($articles);  
    }

    public function getList()
    {
        $list = [];

        $req = $this->_db->prepare('SELECT * FROM articles ORDER BY id');
        $data = $req->execute();
        
        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $list [] = new Articles($data);
        }
        // var_dump($list);  
        return $list;
    }

    public function addArticle(Articles $articles) // permet de créer un article
    {
        $req = $this->_db->prepare('INSERT INTO articles (title, date_article, content) VALUES ( ?, NOW(), ?)');
        $req->execute([
            $articles->getTitle(), // récupère le getter 'title'
            $articles->getDateArticle(), // récupère le getter 'article'
            $articles->getContent(), // récupère le getter 'content'
        ]);
    }
}