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

				<div class="tablename">МАФ (Временные сооружения)
				</div>
				<table  class="table1">
					<thead >
						<tr>
							<th>НОМЕР</th>
							<th class="tbTextTitle1">НАЗВАНИЕ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Title</td>
							<td class="dropdown">
								<button type="button"  class="dropbtn">УДАЛИТЬ</button>
							</td>

						</tr>
					</tbody>
				</table>

				<div class="tablename">Быстромонтируемые здания
				</div>
				<table  class="table1">
					<thead >
						<tr>
							<th>НОМЕР</th>
							<th class="tbTextTitle1">НАЗВАНИЕ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Title</td>
							<td class="dropdown">
								<button type="button"  class="dropbtn">УДАЛИТЬ</button>
							</td>

						</tr>
					</tbody>
				</table>

				<div class="tablename">Сопутствующие товары
				</div>
				<table  class="table1">
					<thead >
						<tr>
							<th>НОМЕР</th>
							<th class="tbTextTitle1">НАЗВАНИЕ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Title</td>
							<td class="dropdown">
								<button type="button"  class="dropbtn">УДАЛИТЬ</button>
							</td>

						</tr>
					</tbody>
				</table>

				<div class="tablename">Сопутствующие  услуги
				</div>
				<table  class="table1">
					<thead >
						<tr>
							<th>НОМЕР</th>
							<th class="tbTextTitle1">НАЗВАНИЕ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Title</td>
							<td class="dropdown">
								<button type="button"  class="dropbtn">УДАЛИТЬ</button>
							</td>

						</tr>
					</tbody>
				</table>
				
				<div class="tablename">ДОБАВИТЬ ТОВАР</div>
				<form action="" method="POST" class="table1 formt">
					<b>Введите все необходимые данные для добавления нового товара. </b>
					<div class="avtvod2 avtvod3">

						<label for="email"><b>Введите название товара или услуги</b></label><br>
						<input type="text" placeholder="ТОРГОВЫЕ КИОСКИ" name="login" required class="TX"><br> 

						<label for="email"><b>Выбирите к какому разделу относится данный товар или услуга</b></label><br>
						<p><input name="dzen" type="radio" value="nedzen"> МАФ (Временные сооружения)</p>
						<p><input name="dzen" type="radio" value="dzen"> Быстромонтируемые здания</p>
						<p><input name="dzen" type="radio" value="nedzen"> Сопутствующие товары</p>
						<p><input name="dzen" type="radio" value="dzen"> Сопутствующие  услуги</p>

						<label for="email"><b>Введите путь картиноки, которая будет расположена на странице продукции сайта</b></label><br>
						<input type="text" placeholder="alinasurk@gmail.com" name="login" required class="TX"><br>

						<label for="email"><b>Введите путь картинок которые будут помещены в слайтер на странице товара или услуги  </b></label><br>
						<div class="main_flex_nowrap textpol">
							<div><input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>
						<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br></div>
							<div><input type="text" placeholder="alinasurk@gmail.com" name="login" required><br>
						<input type="text" placeholder="alinasurk@gmail.com" name="login" required><br></div>
							
						</div>
						
						

						
						<label for="product"><b>Введите первую часть описания товара, которая будет расположена возле слайдера на странице товара или услуги</b></label><br>
						<textarea  class="TX TX2" wrap="hard" name="preferences" placeholder="Согласно правилам киоски относятся к разряду малых архитектурных форм (МАФ) и представляют собой небольшие сооружения, выполненные из облегченных конструкций и установленные временно без создания капитального фундамента и предназначенные для торговли или ведения другой предпринимательской деятельности. Торговый киоск является самым малым объектом МАФ. Площадь стандартных киосков колеблется в диапазоне от 5 до 20 м. кв. Небольшие габаритные размеры объекта позволяют размещать их в наиболее высокопроходимых местах, а также при необходимости легко перевести и установить на новое место. Отличительной чертой торгового киоска является то, что покупатель не может войти внутрь, а товары или услуги реализуются через окошко. При этом весь товар представлен на витрине, которая расположена внутри киоска, что уменьшает риск кражи.  Киоску присущи розничные продажи такими товарами широкого потребления, как алкогольные напитки, продукты питания, журналы, газеты или сигареты. Здесь все товары стандартизированы, что позволяет покупателю лишь выбирать необходимый бренд из предложенного ассортимента.  Зачастую в разговорной речи киоск именуют ларек."></textarea><br>

						<label for="product"><b>Введите первую вторую часть описания товара, которая будет расположена после слайдера на странице товара или услуги</b></label><br>
						<textarea  class="TX TX2" wrap="hard" name="preferences" placeholder="Основные преимущества торговых киосков: небольшие материальные затраты и сжатые сроки изготовления. Если Вы только начинаете свою деятельность в сфере розничной торговли и планируете купить торговый киоск или хотите расширить уже существующую сеть, то обращайтесь, и мы Вам поможем.Наши объекты применяются в самых разнообразных сферах торговли и предоставления услуг. Внешний вид и материалы для отделки и утепления торговых киосков сильно зависят от его назначения и места нахождения. К каждому киоску заказчики предъявляют различные требования и пожелания, поэтому, почти каждый киоск это уникальный модуль. К тому же обратившись к нам, Вам не нужно будет посещать еще десяток компаний, чтобы купить киоск и полностью его укомплектовать, ведь наша компания предлагает услуги не только по изготовлению, но и комплекс сопутствующих услуг. Мы можем установить в торговых киосках систему отопления, систему вентиляции, систему кондиционирования, торговые и складские стеллажи, сантехнику, мебель, козырьки и навесы, водосточную систему и т.д." ></textarea>
					</div>
					
					<button type="submit" class="btn4">ДОБАВИТЬ</button>
				</form>
			</div>


			<button  class="open-button"><a href="includes/logout.php">ВЫХОД</a></button>
		</div>
	</body>
	</html>