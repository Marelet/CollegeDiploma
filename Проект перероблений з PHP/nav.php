<?php
require_once 'admin/includes/connect.php';
$LANG = mysqli_query($connection, "SELECT * FROM `lang`");
$row = mysqli_fetch_assoc($LANG);




$b = $row['language'];


    			# Если кнопка нажата
if( isset( $_POST['nazvanie_knopki'] ) )
{
	$b="Text UKR";
	$LANG =mysqli_query($connection,"UPDATE lang SET language = '$b'" );	
}

elseif  (isset( $_POST['nazvanie_knopki2'] )) {
	$b="Text RU";
	$LANG =mysqli_query($connection,"UPDATE lang SET language = '$b'" );
}




$HOME = mysqli_query($connection, "SELECT * FROM `home`");
$HomeArr=[];
while ($home = mysqli_fetch_assoc($HOME)){
	$HomeArr[$home["TitleTextName"]]=$home[$b];
}

$ABOUT_COMPANY = mysqli_query($connection, "SELECT * FROM `aboutcompane`");
$About_companyArr=[];
while ($about_company = mysqli_fetch_assoc($ABOUT_COMPANY)){
	$About_companyArr[$about_company["TitleTextName"]]=$about_company[$b];
}

$CONTACT = mysqli_query($connection, "SELECT * FROM `contact`");
$ContactArr=[];
while ($contact = mysqli_fetch_assoc($CONTACT)){
	$ContactArr[$contact["TitleTextName"]]=$contact[$b];
}


$HOW_TO_ORDER = mysqli_query($connection, "SELECT * FROM `howtoorder`");
$How_to_orderArr=[];
while ($how_to_order = mysqli_fetch_assoc($HOW_TO_ORDER)){
	$How_to_orderArr[$how_to_order["TitleTextName"]]=$how_to_order[$b];
}

$PROJECTS = mysqli_query($connection, "SELECT * FROM `project`");
$ProjectsArr=[];
while ($projects = mysqli_fetch_assoc($PROJECTS)){
	$ProjectsArr[$projects["TitleTextName"]]=$projects[$b];
}


$PRODUCTION = mysqli_query($connection, "SELECT * FROM `production`");
$Product=[];
while ($product = mysqli_fetch_assoc($PRODUCTION)){
	$Product[$product["TitleTextName"]]=$product[$b];
	
}

$script = urldecode ($_SERVER['QUERY_STRING']);
$NameProd=mysqli_query($connection, "SELECT * FROM `production` WHERE `TitleTextName`='Название продукции' AND (`Text RU`='".$script."' OR `Text UKR`='".$script."' )");
$N=[];
while ($p = mysqli_fetch_assoc($NameProd)){
	$N[$p["TitleTextName"]]=$p['Text RU'];
}
$a = mb_strtolower($N["Название продукции"]);

$TUPEPRODUCT=mysqli_query($connection, "SELECT * FROM `production` WHERE `Name`='".$a."'");
$ProductionArr=[];
while ($production = mysqli_fetch_assoc($TUPEPRODUCT)){
	$ProductionArr[$production["TitleTextName"]]=$production[$b];
} 

$IMG = mysqli_query($connection, "SELECT * FROM `img`");
$ImgArr=[];
$ImgNameArr=[];
while ($img = mysqli_fetch_assoc($IMG)){
	$ImgArr[$img["TitleTextName"]]=$img["NameImg"];
	$ImgNameArr[$img["TitleTextName"]]=$img["Description"];
}



$NavImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Navigation' ");
if ($NavImg) {
	$Vay="img/Navigation/";
	$nav = '<header>
	<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between">
	<div class="main_flex_nowrap flex_aitem-center logo">
	<img src="'.$Vay.$ImgArr["Лого"].'" alt ="'.$ImgNameArr["Лого"].'">
	<div class="textlogo">'.$HomeArr["Название фирмы"].'</div>
	</div>
	<nav class="menu_nav">
	<ul class="main_flex_nowrap flex_aitem-center flex_jcontent-between">
	<li><a href="HOME.php">'.$HomeArr["Название страницы"].'</a></li>
	<li><a href="ABOUT_COMPANY.php">'.$About_companyArr["Название страницы"].'</a></li>
	<li><a href="PRODUCT.php">'.$Product["Название страницы"].'</a></li>
	<li><a href="PROJECTS.php">'.$ProjectsArr["Название страницы"].'</a></li>
	<li><a href="HOW_TO_ORDER.php">'.$How_to_orderArr["Название страницы"].'</a></li>
	<li><a href="CONTACT.php">'.$ContactArr["Название страницы"].'</a></li>
	</ul>


	</nav>
	<div class="location">

	<form method="POST" >
	<button type="submit" name="nazvanie_knopki"  > УКР </button>
	<button type="submit" name="nazvanie_knopki2"  > РУС </button>
	</form>


	</div>
	</div>
	</header> ';


	/*<form method="POST" >
	<button type="submit" name="nazvanie_knopki"  > <img class="lang" src="'.$Vay.$ImgArr["UKR"].'" alt ="'.$ImgNameArr["UKR"].'"> </button>
	<button type="submit" name="nazvanie_knopki2"  > <img class="lang" src="'.$Vay.$ImgArr["RU"].'" alt ="'.$ImgNameArr["RU"].'"> </button>
	</form>*/
	echo $nav;

	if ($_SERVER['PHP_SELF'] == "/HOME.php"){

	}
	elseif ($_SERVER['PHP_SELF'] == "/PRODUCTION.php") {

		$html = '<div class="white HistoryLine">
		<ul class="main_flex_nowrap flex_aitem-center row">
		<li>
		<div class="main_flex_nowrap row">
		<a class="main_flex_nowrap flex_aitem-center  row" href="HOME.php">
		<img class="Homeimg" src="'.$Vay.$ImgArr["Дом"].'" alt ="'.$ImgNameArr["Дом"].'">
		'.$HomeArr["Название страницы"].'
		<img class="Arrowimg" src="'.$Vay.$ImgArr["Стрелка"].'" alt ="'.$ImgNameArr["Стрелка"].'">
		</a>	
		</div>
		</li>
		<li>
		<div class="main_flex_nowrap row">
		<a class="main_flex_nowrap flex_aitem-center " href="PRODUCT.php">'.$Product["Название страницы"].'</a>
		<img class="Arrowimg" src="'.$Vay.$ImgArr["Стрелка"].'" alt ="'.$ImgNameArr["Стрелка"].'">
		</div>
		</li>
		<li>
		<a class="main_flex_nowrap flex_aitem-center row" href="">'.$ProductionArr["Название продукции"].'</a>
		</li>
		</ul>
		</div>';

		echo $html;
	}else {
		if ($_SERVER['PHP_SELF'] == "/ABOUT_COMPANY.php"){
			$a =$About_companyArr["Название страницы"];;
			$link="ABOUT_COMPANY.php";
		}elseif ($_SERVER['PHP_SELF'] == "/PRODUCT.php") {
			$a =$Product["Название страницы"];
			$link="PRODUCT.php";
		}elseif ($_SERVER['PHP_SELF'] == "/PROJECTS.php") {
			$a =$ProjectsArr["Название страницы"];
			$link="PROJECTS.php";
		}elseif ($_SERVER['PHP_SELF'] == "/HOW_TO_ORDER.php"){
			$a =$How_to_orderArr["Название страницы"];
			$link="HOW_TO_ORDER.php";
		}
		elseif ($_SERVER['PHP_SELF'] == "/CONTACT.php"){
			$a =$ContactArr["Название страницы"];
			$link="CONTACT.php";
		}

		$html = '<div class="white HistoryLine">
		<ul class="main_flex_nowrap flex_aitem-center row">
		<li>
		<div class="main_flex_nowrap row">
		<a class="main_flex_nowrap flex_aitem-center  row" href="HOME.php">
		<img class="Homeimg" src="'.$Vay.$ImgArr["Дом"].'" alt ="'.$ImgNameArr["Дом"].'">
		'.$HomeArr["Название страницы"].'
		<img class="Arrowimg" src="'.$Vay.$ImgArr["Стрелка"].'" alt ="'.$ImgNameArr["Стрелка"].'">
		</a>	
		</div>
		</li>
		<li>
		<a class="main_flex_nowrap flex_aitem-center row" href="'.$link.'">'.$a.'
		</a>
		</li>'.$c.'
		</ul>
		</div>';

		echo $html;
	}

	$Feedback='<button class=" open-button open-button2" onclick="openFormCall()"><img class="imgCall" src="img/HOME/call.png"></button>
	<div class="form-popup" id="myFormCall">
	<form action="#" class="form-container form-container2">
	<div class="text_center">
	<h1>ЗАКАЗАТЬ ЗВОНОК</h1>
	<h3>Оставьте Ваш телефон и наш менеджер свяжется с Вами.</h3>
	</div>
	<label for="name"><b>Ф.И.О.</b></label>
	<input type="text" placeholder="Загребельный Максим Викторович" name="name" required>

	<label for="phone"><b>Телефон</b></label>
	<input type="tel" placeholder="0504899113" name="phone" required>

	<label for="email"><b>Почта</b></label>
	<input type="text" placeholder="alinasurk@gmail.com" name="email" required>

	<button type="submit" class="btn4">ОТПРАВИТЬ</button>
	<button type="submit" class="btn4 cancel" onclick="closeFormCall()">ЗАКРЫТЬ</button>
	</form>
	</div>';


	



	$footer = '<footer>
	<div class="main_flex_nowrap flex_aitem-center">
	<div class="FooterSectionWidth ">
	<div class="main_flex_nowrap flex_aitem-center row">
	<img class="logofooter" src="'.$Vay.$ImgArr["Лого"].'" alt ="'.$ImgNameArr["Лого"].'">
	<div class="TexttitleFooter">'.$HomeArr["Название фирмы"].'</div>
	</div>
	<div class="txlogofooter">
	'.$HomeArr["Текст подвал"].'
	</div>
	<div class="main_flex_nowrap row ">
	<a href=""><img class="socialnetwork" src="'.$Vay.$ImgArr["Instagram"].'" alt ="'.$ImgNameArr["Instagram"].'"></a>
	<a href=""><img class="socialnetwork" src="'.$Vay.$ImgArr["Facebook"].'" alt ="'.$ImgNameArr["Facebook"].'"></a>
	<a href=""><img class="socialnetwork" src="'.$Vay.$ImgArr["Twitter"].'" alt ="'.$ImgNameArr["Twitter"].'"></a>
	</div>
	</div>
	<div class="FooterMenuWidth none">
	<a href="HOME.php">'.$HomeArr["Название страницы"].'</a>
	<a href="PRODUCT.php">'.$Product["Название страницы"].'</a>
	<a href="HOW_TO_ORDER.php">'.$How_to_orderArr["Название страницы"].'</a>

	</div>
	<div class="FooterMenuWidth none"> 
	<a href="ABOUT_COMPANY.php">'.$About_companyArr["Название страницы"].'</a>
	<a href="PROJECTS.php">'.$ProjectsArr["Название страницы"].'</a>
	<a href="CONTACT.php">'.$ContactArr["Название страницы"].'</a>
	</div>	


	<div class="FooterSectionWidth flex_aitem-center flex_jcontent-between none">
	<div class="TexttitleFooter TexttitleFooter2">'.$ContactArr["Название страницы"].'</div>

	<div class="contotst" >'.$HomeArr["Подвал контакты1"].'</div>

	<div class="contotst" >'.$HomeArr["Подвал контакты2"].'</div>

	<div class="contotst" >'.$HomeArr["Подвал контакты3"].'</div>


	</div>
	<div class="none">
	<a href="https://www.google.com.ua/maps/place/%D0%9C%D0%BE%D1%81%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80%D0%BE%D1%81%D0%BF.,+89,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+61000/@49.990794,36.2537512,17z/data=!3m1!4b1!4m5!3m4!1s0x4127a0938bb00715:0x9a80e94a196e63a6!8m2!3d49.990794!4d36.2559399?hl=ru" target="_blank"><img class="mape" src="'.$Vay.$ImgArr["Карта"].'" alt ="'.$ImgNameArr["Карта"].'"></a>
	</div>
	</div>	
	</footer>';
}?>



