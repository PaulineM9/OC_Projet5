<?php

class Articles
{
    private $_id,
            $_title,
            $_date_article,
            $_content;

    public function __construct(array $data) 
    {
        $this->hydrate($data); 
    }
    
    public function hydrate(array $data) 
    {
        if (isset($data['id'])) 
        {
            $this->setId($data['id']); 
        }
        if (isset($data['title']))
        {
            $this->setTitle($data['title']);
        }
        if (isset($data['date_article']))
        {
            $this->setTitle($data['date_article']);
        }
        if (isset($data['content']))
        {
            $this->setContent($data['content']);
        }
    }

    // GETTERS:
    public function getId() 
    {
        return $this->_id;
    }

    public function getTitle() 
    {
        return $this->_title;
    }

    public function getDateArticle() 
    {
        return $this->_date_article;
    }

    public function getContent() 
    {
        return $this->_content;
    }

    //SETTERS:
    public function setId($id) 
    {
        $id = (int)$id;
        if ($id > 0)
        {
            $this->_id = $id; 
        }
    }

    public function setTitle($title)
    {
        if (is_string($title))
        {
            $this->_title = $title;
        }
    }

    public function setDateArticle($date_article)
    {
        $this->_date_article = $date_article;
    }

    public function setContent($content)
    {
        if (is_string($content))
        {
            $this->_content = $content;
        }
    }
}