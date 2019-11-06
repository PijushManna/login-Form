<?php
include_once('classes/class.CookiesHandler.php');
session_start();
$name =  $_SESSION['todo_name'];
$cookie="";
$readData = "";
if (isset($_POST['submit'])) {
    $val_pre = "";
    if (isset($_COOKIE[$name])) {
        $val_pre = $_COOKIE[$name];
    }
    $value = $val_pre . '<br>' . $_POST['data'];
    setcookie($name, $value, time() + (86400 * 30), '/');
    // header('location: main.php');
}

if (isset($_COOKIE[$name])) {
    echo "<h5>".$_COOKIE[$name]."</h5>";
}

// Upload
if (isset($_POST['upload'])) {

    if (isset($_COOKIE[$name])) {
        $upload = new CookiesHandler();
        $upload->writeCookies($name, $_COOKIE[$name]);
    } else {
        echo "<h2>Data is Empty</h2>";
    }
}

if (isset($_POST['download'])) {
    $download = new CookiesHandler();
    echo $download->readCookies($name);
} 

if (isset($_POST['deleteCookie'])) {
    $_COOKIE[$name] = "";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Maker</title>
</head>

<body>
    <br><br>
    <form action="main.php" method="post">
        <input type="text" name="data" />
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="Upload" name="upload">
        <input type="submit" value="Download" name="download">
        <input type="submit" value="Delete Cookie" name="deleteCookie">
    </form>


</body>

</html>