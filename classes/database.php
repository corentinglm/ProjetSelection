<?php

class Database
{
    private $dbUsername = 'guillaume';
    private $dbPassword = 'guillaume1337';
    private $dbserv = 'localhost';
    private $dbName = "projetselection";
    public $conn;

    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=" . $this->dbserv . ";dbname=" . $this->dbName, $this->dbUsername, $this->dbPassword);
        } catch (PDOException $e) {
            echo utf8_encode($e->getMessage());
            die();
        }
    }

    public function getConnex(){
        return $this->conn;
    }
}
