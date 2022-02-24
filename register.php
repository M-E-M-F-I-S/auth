<!DOCTYPE html>
	<html lang="ru">
	<head>
	<meta charset="utf-8"> 
 <title> Регистрация</title>
	</head>
	<body>
<div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
<form action="validation-form/save_names.php" id="registerform" method="post"name="registerform">
 <p><label>Имя<br>
 <input class="input" id="firstname" name="firstname"size="32"  type="text" value=""></label></p>
<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32" type="email" value=""></label></p>
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  <p class="regtext">Уже зарегистрированы? <a href= "login.php">Авторизуйтесь</a></p>
 </form>
</div>
</div>
</body>
</html>