<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$vk = filter_var(trim($_POST['vk']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 30) {
    echo "Недопустимая длина пароля (от 6 до 30 символов)";
    exit();
}

$pass = md5($pass."lkmavfdsavsdlkm");

$par1_ip = "localhost";
$par2_name = "vova-pervushin";
$par3_p = "Gthdeiby123";
$par4_db = "vova-pervushin";



$mysql = new mysqli($par1_ip, $par2_name, $par3_p, $par4_db);


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `email` = '$email' AND `vk` = '$vk'");

    $user = $result->fetch_assoc();
    if(count((is_countable($user)?$user:[])) == 0)
{
    $mysql->query("INSERT INTO `users` (`login`, `name`, `email`, `vk`, `pass`) 
    VALUES('$login', '$name', '$email', '$vk', '$pass')"); 
}
else
{
    echo "Данные логина, почты или ВКонтакте не уникальны";
    exit();
}
$mysql->close();

header('Location: /auth')

?>