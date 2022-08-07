<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRAVO HTML</title>
	<link rel="stylesheet"  href="AdminCss.css">
	<script src="JS1.js"></script>
</head>
<body class="details">
	<div class="bordblack bordblack1" id="fon">
		<header>
			<div class=" flex_aitem-center flex_jcontent-between">
				<div class="main_flex_nowrap flex_aitem-center">
					<img class="imglogo2" src="../img/foundation/logo.png">
					<div class="textlogo"><a href="AdminPanel.php">ПАНЕЛЬ АДМИНИСТРАТОРА</a></div>
				</div>
				<nav class="menu_nav">
					<ul class="main_flex_nowrap">
					<li class="nav"><a href="PageUsers.php">УПРАВЛЕНИЕ ПОЛЬЗОВАТЕЛЯМИ</a></li>
					<li class="nav"><a href="PageEditor.php">РЕДАКТИРОВАНИЕ ДАННЫХ НА СТРАНИЦАХ</a></li>
					<li class="nav"><a href="PageProd.php">ДОБАВЛЕНИЕ НОВОГО ТОВАРА</a></li>
					<li class="nav"><a href="PageProd.php">ПРОСМОТР ДАННЫХ С ФОРМ</a></li>
				</ul>
				</div>
			</header> 
			<div class="center">Добро пожаловать в раздел редактирования пользователей. Здесь вы можете просмотреть пользователей которые имеют доступ к панели администратора.Так же вы пожете удалить пользователя, но для этого вы должны знать пароль основного адинистратора. 

				<div class="tablename">ТЕКСТ</div>
				<table  class="table1">
					<thead >
						<tr>
							<th>НОМЕР</th>
							<th class="tbTextTitle1">ЛОГИН</th>
							<th class="tbTextTitle2">ИНИЦЫАЛЫ</th>
							<th class="tbTextTitle2">ТЕЛЕФОН</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Title</td>
							<td>Text title</td>
							<td>Text title</td>
							<td class="dropdown">
								<button type="button"  class="dropbtn">УДАЛИТЬ</button>
							</td>

						</tr>
					</tbody>
				</table>
				
				<div class="tablename">ДОБАВИТЬ ПОЛЬЗОВАТЕЛЯ</div>
				<form action="" method="POST" class="table1 formt">
					<b>Введите все необходимые данные для добавления нового пользователя. Однако если вы не знаете основной пароль для добавление пользователей вы не сможете этого сделать</b>
						<div class="avtvod ">

							<label for="email"><b>Логин  </b></label>
							<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>

							<label for="email"><b>Пароль  </b></label>
							<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>

							<label for="email"><b>Иницыалы  </b></label>
							<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>

							<label for="email"><b>Телефон  </b></label>
							<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>


							<label for="product"><b>Пароль онсновного админа</b></label>
							<input type="password" placeholder="Password" name="password" required><br>
						</div>
					
					<button type="submit" class="btn4">ДОБАВИТЬ</button>
				</form>
			</div>


			<button  class="open-button"><a href="includes/logout.php">ВЫХОД</a></button>
		</div>
	</body>
	</html>