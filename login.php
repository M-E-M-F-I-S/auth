<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<title> Авторизация </title>
<link href="css/style.css" media="screen" rel="stylesheet">
</head> 
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="validation-form/auth.php" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login"type= "submit" value="Войти"></p>
	<p class="regtext">Еще не зарегистрированы? <a href= "register.php">Регистрация</a></p>
   </form>
 </div>
 </div>
</body>
