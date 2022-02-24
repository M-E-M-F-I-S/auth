<!DOCTYPE html>
   <html lang="ru">
   <head>
   <meta charset="utf-8"> 
 <title> Регистрация</title>
   </head>

<?php
   if (isset($_POST['firstname'])) { $firstname = $_POST['firstname']; if ($firstname == '') { unset($firstname);} }
   if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
   if (isset($_POST['username'])) { $username=$_POST['username']; if ($username == '') { unset($username);} }
   if (isset($_POST['password'])) { $password=$_POST['password']; if ($password == '') { unset($password);} }
 if (empty($firstname) or empty($email) or empty ($username) or empty ($password))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $firstname = stripslashes($firstname);
    $firstname = htmlspecialchars($firstname);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $firstname = trim($firstname);
    $username = trim($username);
    $password = trim($password);


    $password = md5($password."54uy217sgh");
    require 'E:/Work/php learning/database/db.php';
    $results = $mysql->query("SELECT * FROM `myguests` WHERE `username` ='$username'");
    $myrow = $results -> fetch(PDO::FETCH_ASSOC);
    if (!empty($myrow['id'])){
      exit ("Извините, введёный вами логин уже зарегистрирован, введите другой логин");
    }
   $results = $mysql->query("SELECT * FROM `myguests` WHERE `email` ='$email'");
   $myrow = $results -> fetch(PDO::FETCH_ASSOC);
    if (!empty($myrow['id'])){
      exit ("Извините, введённая вами электронная почта уже зарегистрирована.");
    }


    $sql = 'INSERT INTO MyGuests (firstname,email,username,password)
    VALUES (:firstname,:email,:username,:password)';
    $query = $mysql->prepare($sql);
    $query->execute(['firstname' =>$firstname,'email' =>$email,'username' =>$username,'password' =>$password]);

    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/login.php'>Авторизация</a>";
 //else {
   // echo "Ошибка! Вы не зарегистрированы.";
    //}
    ?>