<?php

require_once('database.php');

// IP tracking handler

//  Gère l'ajout d'IP à la database

class Logs
{

    private $ip;
    private $db;

    private $status;

    public function __construct()
    {
        $this->ip = getenv("REMOTE_ADDR");
        $this->db = (new Database)->getConnex();
    }

    public function getIP()
    {

        return $this->ip;
    }

    public function handleLogin()
    {
        $this->register();
        $this->log();
    }

    public function register()
    {

        // Système de primary key pour éviter les doublons, erreur SQL si on enregistre deux fois la même IP, on ignore l'erreur, ce qui veut dire qu'on ne créé pas de doublon dans la database

        try {
            $sql = 'INSERT INTO  `ip` (`ip`) VALUES (:target)';
            $query = $this->db->prepare($sql);
            $query->execute(array(':target' => $this->getIP()));
        } catch (PDOException) {
            return;
        }
    }

    public function log()
    {
        $sql = 'INSERT INTO  `logs` VALUES (:target,:account,:date,"Connection au site")';
        $query = $this->db->prepare($sql);

        // initializing date
        $date = date('d-m-y h-m-s');

        $query->execute(array(':target' => $this->getIP(), ':date' => $date, ':account' => $_SESSION['complete-name']));
    }

    public function handleLogout()
    {
        $sql = 'INSERT INTO  `logs` VALUES (:target,:account,:date,"Déconnexion")';
        $query = $this->db->prepare($sql);

        // initializing date
        $date = date('d-m-y h-m-s');

        $query->execute(array(':target' => $this->getIP(), ':date' => $date, ':account' => $_COOKIE['complete-name']));
    }
}
