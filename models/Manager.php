<?php 
// namespaces Models;
// use \PDO;

abstract class Manager 
{
    protected function dbConnect()
    {
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=projet_5;charset=utf8',
                'root',
                'root',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        return $db;
        } catch (Exception $e) {
            die('erreur : ' . $e->getMessage());
        }
    }
}