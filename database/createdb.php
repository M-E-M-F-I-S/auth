<?php
$servername = 'localhost';
$username = 'root';
$password = '';


try {
$conn = new PDO ("mysql:host = $servername",$username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


/* Создание базы данных */
$sql = "CREATE DATABASE myDBPDO";
/* Вывод сообщения об успехе */
$conn->exec ($sql);
echo "database created succesfully";
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();




