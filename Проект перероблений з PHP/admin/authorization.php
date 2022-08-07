<?php
	
	session_start();

	$login="root";
	$password="1";
	

	if($_SESSION["login"] === $login && $_SESSION["password"] === $password){
		header("Location: AdminPanel.php");
	}
?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRAVO HTML</title>
	<link rel="stylesheet"  href="AdminCss.css">
	<script src="JS.js"></script>
</head>
<body class="adm">
 	<div class="main_flex_nowrap logo">
 		<img class="imglogo" src="../img/foundation/logo.png">
		<div class="textlogo">MODUL-BRAVO</div>
 	</div>
	<div class="AvtAdmin">
		<form action="includes/login.php" method="POST">
				<h1>АВТОРИЗАЦИЯ</h1>
				<h3>Введите свой логин и пароль, чтобы зайти на панель администратора.</h3>
			<div class="avtvod">
				<label for="email"><b>Логин  </b></label>
				<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>

				<label for="product"><b>Пароль</b></label>
				<input type="password" placeholder="Password" name="password" required><br>
			</div>
				
			<button type="submit" class="btn4">ВОЙТИ</button>
		</form>
	</div>  

	
</body>
</html>