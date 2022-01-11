<?php 
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);


    $pass = md5($pass."asdfrgsdfsfdb");


    $mysql = new mysqli('localhost', 'x99983e2_123', 'Gthdeiby123!', 'x99983e2_123');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` ='$pass'");

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    print_r($user);
    exit();

    $mysql->close();

    header('Location: /');



?>