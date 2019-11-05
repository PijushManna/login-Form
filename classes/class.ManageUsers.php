<?php
include_once('class.database.php');

class ManageUsers
{
    public $link;

    function __construct()
    {
        $db_connection = new dbConnection();
        
        $this->link = $db_connection->connect('localhost', 'root', 'mamp', 'test');
        return $this->link;
    }

    function registerUsers($username, $password, $email)
    {
        $query = $this->link->prepare("INSERT INTO users(username,password,email) VALUES (?,?,?)");
        $values = array($username, $password, $email);
        $query->execute($values);
        $counts = $query->rowCount();
        return $counts;
    }

    function loginUsers($username,$password)
    {
        $query = $this->link->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        $rowCount = $query->rowCount();
        return $rowCount;
    }

    function getUserInfo($username)
    {
        $query = $this->link->query("SELECT * FROM users WHERE username = '$username'");
        $rowCount = $query->rowCount();
        if ($rowCount == 1) {
            $result = $query->fetchAll();
            return $result;
        }else {
            return $rowCount;
        }
    }
}
?>