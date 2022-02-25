<?php 
require_once 'config.php';

$dsn   = "mysql:host = $servername;dbname=$dbname;charset=utf8";
$mysql = new PDO($dsn,$username,$password);

?>
