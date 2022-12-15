<?php

class Database
{

    // Changez aussi connection.php dans la racine.
    private $dbUsername = 'guillaume';
    private $dbPassword = 'guillaume1337';
    private $dbserv = 'localhost';
    private $dbName = "projetselection";
    public $conn;

    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=" . $this->dbserv . ";dbname=" . $this->dbName.";charset=UTF8", $this->dbUsername, $this->dbPassword);

            
        } catch (PDOException $e) {
            include('./errors/fatalError.php');
            die();
        }
    }

    public function getConnex()
    {
        return $this->conn;
    }
}
