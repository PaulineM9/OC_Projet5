<?php
// namespace Oc\Projet_5\Models;

// use \Oc\Projet_5\Models\Manager;
// use \PDO;

class CommentsArticlesManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function getAdd($commentArticle)
    {
        $req = $this->_db->prepare('INSERT INTO comments_articles (id_article, pseudo, mail, content, date_comment, signaled) VALUES (?, ?, ?, ?, NOW(), 0)');
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

        $req = $this->_db->prepare('SELECT id_article, pseudo, mail, date_comment, content FROM comments_articles ORDER BY date_comment DESC');
        $req->execute();

        $req_join = $this->_db->prepare('SELECT * FROM articles, comments_articles WHERE articles.id=comments_articles.id_article ORDER BY date_comment DESC');
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

    public function getArticleComment()
    {
        $list = [];

        $req = $this->_db->prepare('SELECT id, pseudo, mail, content, date_comment, signaled FROM comments_articles WHERE id_article= ? ORDER BY date_comment DESC LIMIT 0, 5');
        $req->execute(array(
            $_GET['id']
        ));

        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $list [] = new CommentsArticles($data); 
        }
        return $list;
    }

    public function getSignal($comments)
    {
        $req_signal = $this->_db->prepare('UPDATE comments_articles SET signaled = 1 WHERE id = :idArticle');
        $req_signal->execute([
            'idArticle' => $comments->getId()
        ]);
    } 

    public function getListSignaled()
    {
        $list = [];

        $req = $this->_db->prepare('SELECT id_article, pseudo, mail, content, date_comment FROM comments_articles WHERE signaled = 1 ORDER BY date_comment DESC');
        $req->execute();

        $req_join = $this->_db->prepare('SELECT * FROM articles, comments_articles WHERE articles.id=comments_articles.id_article AND signaled = 1 ORDER BY date_comment DESC');
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

    public function getDelete($commentsDelete)
    {
        $req_delete = $this->_db->prepare('DELETE FROM comments_articles WHERE id = :id');
        $req_delete->execute([
            'id' => $commentsDelete->getId() 
        ]);
    }
}