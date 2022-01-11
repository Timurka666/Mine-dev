

<?php 
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);


    $pass = md5($pass."lkmavfdsavsdlkm");


    $par1_ip = "localhost";
    $par2_name = "vova-pervushin";
    $par3_p = "Gthdeiby123";
    $par4_db = "vova-pervushin";
    
    $mysql = new mysqli($par1_ip, $par2_name, $par3_p, $par4_db);

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` ='$pass'");

    

    $user = $result->fetch_assoc();
    if(count((is_countable($user)?$user:[])) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }


    setcookie('user', $user['name'], time() + 3600, "/");
    setcookie('type', $user['type'], time() + 3600, "/");



    $mysql->close();

    header('Location: /cabinet');
    exit();



?>

