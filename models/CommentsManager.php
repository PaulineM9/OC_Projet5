<?php
require_once('models/Manager.php');

class CommentsManager extends Manager
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

    public function getAdd($comment)
    {
        $req = $this->_db->prepare('INSERT INTO comments (id_article, pseudo, mail, content, date_comment, signaled) VALUES (?, ?, ?, ?, NOW(), 0)');
        $req->execute([
            $_GET['id'], 
            $_POST['pseudo'],
            $_POST['mail'],
            $_POST['content']
        ]); 
    }

    public function getListAllArticles() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT id_article, pseudo, mail, date_comment, content DATE_FORMAT (date_comment, "%d/%m/%Y à %Hh%imin%ss") AS date_creation_comment FROM comments ORDER BY date_comment DESC');
        $req->execute();

        $req_join = $this->_db->prepare('SELECT * FROM articles, comments WHERE articles.id=comments.id_article ORDER BY date_comment DESC');
        $req_join->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC))        
        {
            while ($data = $req_join->fetch(PDO::FETCH_ASSOC))           
            {
                $list [] = $data;  
            }
        }
        return $list;
    }

    public function getListAllPortraits() 
    {
        $list = [];

        $req = $this->_db->prepare('SELECT id_article, pseudo, mail, date_comment, content DATE_FORMAT (date_comment, "%d/%m/%Y à %Hh%imin%ss") AS date_creation_comment FROM comments ORDER BY date_comment DESC');
        $req->execute();

        $req_join = $this->_db->prepare('SELECT * FROM portraits, comments WHERE portraits.id=comments.id_article ORDER BY date_comment DESC');
        $req_join->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC))        
        {
            while ($data = $req_join->fetch(PDO::FETCH_ASSOC))           
            {
                $list [] = $data;  
            }
        }
        return $list;
    }
}