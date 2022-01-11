<?php
$par1_ip = "localhost";
$par2_name = "vova-pervushin";
$par3_p = "Gthdeiby123";
$par4_db = "vova-pervushin";

$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

if ($induction == false) {
    echo "Ошибка подключения";
}


?>