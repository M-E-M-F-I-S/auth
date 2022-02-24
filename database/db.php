<?php 

$servername = 'localhost';
$login = 'root';
$pass = '';
$dbname = 'mydbpdo';
$dsn = "mysql:host = $servername;dbname=$dbname;charset=utf8";

$mysql = new PDO($dsn,$login,$pass);

?>