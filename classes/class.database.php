<?php

class dbConnection
{
    function connect($db_host, $db_user, $db_pass, $db_name)
    {
        try {
            $db_conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            return $db_conn;
        } catch (PDOException $e) {
            return $e->getMessage();
            echo "it is not working bro...";
        }
    }
}
?>