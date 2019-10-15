<?php
require_once('models/Manager.php');

class UserManager extends Manager
{
    private $_db;

    public function __construct()
    {
        $this->_db = $this->dbConnect();
    }

    public function get()
    {
        $req = $this->_db->prepare('SELECT * FROM user');
        $req->execute();
        $data[] = $req->fetch();

        return new User($data);  
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
        $data[] = $req->fetch();

        return new User($data);
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