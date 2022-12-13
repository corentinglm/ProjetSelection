<?php

require('database.php');

class Users
{

    private $db;


    public function __construct()
    {
        $this->db = (new Database())->getConnex();
    }


    public function passwordVerification($username, $password)
    {

        $sql = 'SELECT * FROM users WHERE username=:username';
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $username));

        $res = $query->fetch();

        if (password_verify($password, $res['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getRole($username)
    {
        $sql = 'SELECT role FROM users WHERE username=:username';
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $username));
        $res = $query->fetch();

        // returns role
        return $res['role'];
    }

    public function createSession($username)
    {

        $sql = 'SELECT * FROM users WHERE username=:username';
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $username));
        $res = $query->fetch();

        $_SESSION['id'] = $res['ID'];
        $_SESSION['username'] = $res['username'];
        $_SESSION['name'] = $res['nom'];
        $_SESSION['surname'] = $res['prenom'];
        $_SESSION['role'] = $res['role'];
        $_SESSION['complete-name'] = $res['prenom'] . ' ' . $res['nom'];
        $_SESSION['session'] = session_id();

        return;
    }

    public function setCookies($username)
    {
        // Redondant mais flemme.

        $sql = 'SELECT * FROM users WHERE username=:username';
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $username));
        $res = $query->fetch();

        setcookie('username', $res['username'], time() + (86400 * 30), "/");
        setcookie('role', $res['role'], time() + (86400 * 30), "/");
        setcookie('complete-name', $res['prenom'] . ' ' . $res['nom'], time() + (86400 * 30), "/");
        setcookie('surname', $res['prenom'], time() + (86400 * 30), "/");
    }

    
}
