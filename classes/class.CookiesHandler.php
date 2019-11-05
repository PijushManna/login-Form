<?php
include_once('class.database.php');

class CookiesHandler
{
    public $link;
    function __construct()
    {
        $db_connection = new dbConnection();

        $this->link = $db_connection->connect('localhost', 'root', 'mamp', 'test');
        return $this->link;
    }

    function writeCookies($username,$data)
    {
        $query = $this->link->query("SELECT username FROM cookies WHERE username = '$username'");
        $rowCount = $query->rowCount();
        if ($rowCount >= 1) {
            $query = $this->link->prepare("UPDATE cookies SET data='$data' WHERE username='$username'");
            $values = array($username, $data);
            $query->execute($values);
            $counts = $query->rowCount();
            return $counts;
        } else {
            $query = $this->link->prepare("INSERT INTO cookies (username,data) VALUES (?,?) ");
            $values = array($username, $data);
            $query->execute($values);
            $counts = $query->rowCount();
            return $counts;
        }
        
    }
    function readCookies($username)
    {
        $query = $this->link->query("SELECT data FROM cookies WHERE username='$username'");
        $rows = $query->fetchAll();
        return $rows[0][0];
    }
}
?>