<?php
$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

if (mb_strlen($username) < 5 || mb_strlen($username) > 90){
	echo 'Недопустимая длинна логина';
	exit();
}
?>