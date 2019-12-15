<?php
namespace Models;

use Exception;
use \PDO;
use Models\User;
use Models\Manager;

class UserManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function verifyUser()
    {
        $req = $this->_db->prepare('SELECT * FROM user');
        $req->execute();
        $data = $req->fetch();

        if ($data == false) {
            throw new Exception();
        } else {
            return $data;
        }
    }

    public function getInscription(User $profil)
    {
        $req = $this->_db->prepare('INSERT INTO user (identifiant, email, password) VALUES (?,?,?)');
        $req->execute([
            $profil->getIdentifiant(),
            $profil->getEmail(),
            $profil->getPassword()
        ]);
    }

    public function getConnect(User $profil)
    {
        $req = $this->_db->prepare('SELECT * FROM user WHERE identifiant= :identifiant');
        $req->execute([
            'identifiant' => $profil->getIdentifiant()
        ]);
        $data = $req->fetch();

        if ($data) {
            return new User($data);    
        } else {
            return false;
        }
    }

    public function getChanges(User $profil)
    {
        $req = $this->_db->prepare('UPDATE user SET identifiant = :identifiant, email = :email, password = :password WHERE id = :id');
        $req->execute([
            'id' => $profil->getId(),
            'identifiant'  => $profil->getIdentifiant(),
            'email' => $profil->getEmail(),
            'password' => $profil->getPassword()
        ]);
    }
}