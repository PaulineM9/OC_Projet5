<?php

class Projects
{
    private $_id,
        $_title,
        $_description,
        $_link;

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
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
        if (isset($data['link'])) {
            $this->setLink($data['link']);
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

    public function getDescription()
    {
        return $this->_description;
    }

    public function getLink()
    {
        return $this->_link;
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

    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->_description = $description;
        }
    }

    public function setLink($link)
    {
        $this->_link = $link;
    }
}
