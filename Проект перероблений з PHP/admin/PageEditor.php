<?php 
require_once 'includes/connect.php';
$variables1 = mysqli_query($connection, "SELECT * FROM `home`");

$variables = mysqli_query($connection, "SELECT * FROM `howtoorder`");

$variables2 = mysqli_query($connection, "SELECT * FROM `howtoorder`");
$page = mysqli_query($connection, "SELECT * FROM `page`");




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRAVO HTML</title>
	<link rel="stylesheet"  href="AdminCss.css">
	<script src="JS1.js"></script>
</head>
<body class="details">
	<div class="bordblack" >
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
			<div class="center">Добро пожаловать в раздел редактирования странц сайтаю Здесь вы можете поменять наполнение сайта.<br>Для начала выберите страницу сайта, которую хотите отредактировать.
				<form  method="POST">
					<div>
						<select class="pageWebsite" name="pages">
							<?php
							while($pg = mysqli_fetch_assoc($page)){
								echo '<option>' .$pg['Name']. '</option>';
							}
							?>
						</select>
					</div>
					<button type="submit" class="btn4">ВЫБРАТЬ</button>	
				</form>

				<div  >
					<?php
					echo'<div class="tablename">ДАННЫЕ СТРАНИЦЫ ' .$_POST['pages']. ' </div>';
					?>
					<div class="tablename">ТЕКСТ</div>
					<table  class="table1">
						<thead >
							<tr>
								<th>НОМЕР</th>
								<th class="tbTextTitle1">НАЗВАНИЕ</th>
								<th  colspan="2" class="tbTextTitle2">ЗНАЧЕНИЕ</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php
							$v=1;
							if ($_POST['pages'] =="КАК ЗАКАЗАТЬ") {

								while ($var = mysqli_fetch_assoc($variables)){
									if ($var['Category'] == "Текст") {
										echo
										'<tr>
										<th rowspan="2">' .$v++. '</th>
										<td rowspan="2">' .$var['TitleTextName']. '</td>
										<td>Рус</td>
										<td>' .$var['Text RU']. '</td>
										<td rowspan="2" class="dropdown">
										<button type="button"  class="dropbtn" onclick="myFunction()">ДЕЙСТВИЕ</button>
										<ul id="myDropdown" class="dropdown-content" aria-labelledby="dropdownMenuButton">
										<li><a>ИЗМЕНИТЬ</a></li>
										<li><a>УДАЛИТЬ</a></li>
										</ul>	
										</td>
										</tr>

										<tr>
										<td>Укр</td>
										<td>' .$var['Text UKR']. '</td></tr>
										'
										;
									}
								}
							}

							elseif ($_POST['pages'] =="ГЛАВНАЯ") {

								while ($var = mysqli_fetch_assoc($variables1)){
									if ($var['Category'] == "Текст") {
										echo'<tr>
										<th>' .$v++. '</th>
										<td>' .$var['TitleTextName']. '</td>
										<td>' .$var['Text']. '</td>
										<td class="dropdown">
										<button type="button"  class="dropbtn" onclick="myFunction()">ДЕЙСТВИЕ</button>
										<ul id="myDropdown" class="dropdown-content" aria-labelledby="dropdownMenuButton">
										<li><a>ИЗМЕНИТЬ</a></li>
										<li><a>УДАЛИТЬ</a></li>
										</ul>	
										</td>
										</tr>';
									}
								}
							}
							
							?>


						</tbody>
					</table>
					<div class="tablename">КАРТИНКИ</div>
					<table  class="table1">
						<thead >
							<tr>
								<th>НОМЕР</th>
								<th class="tbTextTitle1">НАЗВАНИЕ</th>
								<th class="tbTextTitle2">ЗНАЧЕНИЕ</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$c=1;
							if ($_POST['pages'] =="КАК ЗАКАЗАТЬ") {

								while ($var2 = mysqli_fetch_assoc($variables2)){
									if ($var2['Category'] == "Картинки") {
										echo'<tr>
										<th>' .$c++. '</th>
										<td>' .$var2['TitleTextName']. '</td>
										<td>' .$var2['Text']. '</td>
										<td class="dropdown">
										<button type="button"  class="dropbtn" onclick="myFunction()">ДЕЙСТВИЕ</button>
										<ul id="myDropdown" class="dropdown-content" aria-labelledby="dropdownMenuButton">
										<li><a>ИЗМЕНИТЬ</a></li>
										<li><a>УДАЛИТЬ</a></li>
										</ul>	
										</td>
										</tr>';
									}
								}

							}else{
							}
							

							?>
						</tbody>
					</table>
					<div class="tablename">ДОБАВИТЬ ЭЛЕМЕНТ</div>
					<form action="" method="POST" class="table1 formt">
						<div class="avtvod2">
							<label for="email"><b>Выбирите к какой таблице вы хотите добавть новый элемент  </b></label>
							<p><input name="dzen" type="radio" value="nedzen"> Текст</p>
							<p><input name="dzen" type="radio" value="dzen"> Картинки</p>

							<label for="product"><b>Введите название добавляемого элемента </b></label><br>
							<textarea  class="TX" wrap="hard" placeholder="Выши пожелания и требования" name="preferences"></textarea><br>

							<label for="product"><b>Введите данные, которые будет хранить добавляемый элемент</b></label><br>
							<textarea  class="TX" wrap="hard" placeholder="Выши пожелания и требования" name="preferences"></textarea>
						</div>
						<button type="submit" class="btn4">ДОБАВИТЬ</button>
					</form>
				</div>


			</div>
			<button  class="open-button"><a href="includes/logout.php">ВЫХОД</a></button>
		</div>
	</body>
	</html>