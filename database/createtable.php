<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myDBPDO';


try {
$conn = new PDO ("mysql:host = $servername;dbname=$dbname" , $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


/* Создание таблицы */
$sql = "CREATE TABLE MyGuests (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(32) collate utf8_unicode_ci NOT NULL,
email varchar(32) collate utf8_unicode_ci NOT NULL,
username varchar(20) collate utf8_unicode_ci NOT NULL,
password varchar(32) collate utf8_unicode_ci NOT NULL,
UNIQUE KEY username (username)
)";

/* Вывод сообщения об успехе */
$conn->exec($sql);
echo "Table MyGuests created succesfully";
}catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn= null;
?>