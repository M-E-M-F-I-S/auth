<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title> Регистрация</title>
    </head>
    <body>
<?php
require_once '../database/db.php';

//валидация данных
if (!isset($_POST['firstname']) || !isset($_POST['email']) || !isset($_POST['username']) || !isset($_POST['password'])) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

//очистка данных
$firstname = trim(htmlspecialchars(stripslashes($_POST['firstname'])));
$email     = trim(htmlspecialchars(stripslashes($_POST['email'])));
$username  = trim(htmlspecialchars(stripslashes($_POST['username'])));
$password  = trim(htmlspecialchars(stripslashes($_POST['password'])));

//проверяем на существование пользователя
$results = $mysql->query("SELECT * FROM `myguests` WHERE `username` = '$username' OR `email` = '$email'");
$myrow   = $results->fetch(PDO::FETCH_ASSOC);
if (!empty($myrow['id'])) {
    if ($myrow['username'] === $username) {
        exit ("Извините, введёный вами логин уже зарегистрирован, введите другой логин");
    } else {
        exit ("Извините, введённая вами электронная почта уже зарегистрирована.");
    }
}

//сохраняем нового пользователя
$password = md5($password."54uy217sgh");
$sql      = 'INSERT INTO MyGuests (firstname,email,username,password) VALUES (:firstname,:email,:username,:password)';
$query    = $mysql->prepare($sql);
$query->execute(['firstname' => $firstname,'email' => $email,'username' => $username,'password' => $password]);

echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/login.php'>Авторизация</a>";
?>
    </body>
</html>
