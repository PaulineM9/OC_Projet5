<?php

class Portraits
{
    private $_id,
        $_title,
        $_date_portrait,
        $_content;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['title'])) {
            $this->setTitle($data['title']);
        }
        if (isset($data['date_portrait'])) {
            $this->setDatePortrait($data['date_portrait']);
        }
        if (isset($data['content'])) {
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

    public function getDatePortrait()
    {
        return $this->_date_portrait;
    }

    public function getContent()
    {
        return $this->_content;
    }

    //SETTERS:
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->_title = $title;
        }
    }

    public function setDatePortrait($date_portrait)
    {
        $this->_date_portrait = $date_portrait;
    }

    public function setContent($content)
    {
        if (is_string($content)) {
            $this->_content = $content;
        }
    }
}
