<?php
	$username = filter_var(trim($_POST['username']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);

    $password = md5($password."54uy217sgh");
    
    require 'E:/Work/php learning/database/db.php';



    $results = $mysql->query("SELECT * FROM `myguests` WHERE `username` ='$username' AND `password` = '$password'");
    $user = $results -> fetch(PDO::FETCH_ASSOC);


if(count($user) == 0 ) {
	echo "Неверный логин или пароль";
	exit();
}
else echo ("Вы успешно авторизовались");




?>