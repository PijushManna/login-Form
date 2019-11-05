<?php
if (isset($_POST['register'])) {
    include_once('class.ManageUsers.php');
    $users = new ManageUsers();
    
    $error = "";
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $email = $_POST['email'];

    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required";
    } else {
        $check_availibility = $users->getUserInfo($username);
        if ($check_availibility == 0) {
            $register_user = $users->registerUsers($username, $password, $email);
            if ($register_user == 1) {
                $make_sessions = $users->getUserInfo($username);
                print_r($make_sessions);
            }
        } else {
            $error = 'Username already exist';
        }
    }
}
// elseif (!filter($email, FILTER_VALIDATE_EMAIL)) {
//     $error = "Email is not valid";
// } 

if (isset($_POST['login'])) {
    session_start();
    include_once('class.ManageUsers.php');
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    
    if (empty($username) || empty($password)) {
        $error = 'All fields are required';
    } else {
        $login_user = new ManageUsers();
        $auth_user = $login_user->loginUsers($username, $password);
        echo $auth_user;
        
        if ($auth_user >= 1) {
            $make_session = $login_user->getUserInfo($username);
            foreach ($make_session  as $userSession) {
                
                $_SESSION['todo_name'] = $userSession['username'];
                print_r($_SESSION);
                if (isset($_SESSION['todo_name'])) {
                    echo "this is the thing and it is running...";
                    echo $_SESSION['todo_name'];
                    header("location:main.php");
                } else {
                    echo "it is not running";
                }
            }
        }
    }
}
?>