<?php 

abstract class Manager 
{
    protected function dbConnect()
    {
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=mapa8726_projet_5;charset=utf8', 'mapa8726_paulineweb', "Gaspard0415",
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        return $db;
        } catch (Exception $e) {
            die('erreur : ' . $e->getMessage());
        }
    }
}

// 'mysql:host=localhost;dbname=projet_5;charset=utf8', 'root', "root",
// 'mysql:host=localhost;dbname=mapa8726_projet_5;charset=utf8', 'mapa8726_paulineweb', "Gaspard0415",