<?php session_start();
$_SESSION['TRon'] = $rowText;?>
<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>BRAVO HTML</title>
	<link rel="stylesheet"  href="CSS.css">
	<script src="JS.js"></script>
</head>
<body>
	<?php 
	include 'nav.php';
	$HomeImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Home' ");
	if ($HomeImg){
		$Vay="img/Home/"?>    

		<div class="baner">
			<div class="baner_text1"><?php 
			echo $HomeArr["Текст баннера 1"];
			?></div> 
			<div class="baner_text2"><?php 
			echo $HomeArr["Текст баннера 2"];
			?></div> 
			<div class="baner_text3"><?php 
			echo $HomeArr["Текст баннера 3"];
			?></div>

			<div   class=" button main_flex_nowrap flex_aitem-center flex_jcontent-between">
				<a href="HOW_TO_ORDER.php">
					<div class="btn1 main_flex_nowrap flex_aitem-center flex_jcontent-between order row">
						<?php 
						echo $How_to_orderArr["Название страницы"];
						?>
						<img src="<?php echo $Vay.$ImgArr["Стрелка"]?>" alt="<?php $ImgNameArr["Стрелка"]?>">
					</div>
				</a>
				<a href="CONTACT.php">
					<div  class="btn2 main_flex_nowrap flex_aitem-center flex_jcontent-between connection row">
						<?php 
						echo $ContactArr["Название страницы"];
						?>
						<img src="<?php echo $Vay.$ImgArr["Стрелка"]?>" alt="<?php $ImgNameArr["Стрелка"]?>">
					</div>
				</a>
			</div>
		</div>




		<section class="white">
			<div class="TextPAd subtitle_text"><?php echo $HomeArr["Заголовок"];?></div>

			<?php $PremImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName`='Преимущества' ");
			$BenefitsImg = mysqli_query($connection, "SELECT * FROM `home` WHERE `TitleTextName` ='Преимущества'");

			if ($PremImg and $BenefitsImg) { ?>
				<div class=" main_flex_nowrap flex_aitem-center flex_jcontent-between BenefitsBox">
					<?php while ($PRI=mysqli_fetch_assoc($PremImg) AND $PRT=mysqli_fetch_assoc($BenefitsImg)) {?>
						<div class="main_flex_nowrap flex_aitem-center SectionPrem row" >
							<img class="ProdNumberPrem" src="<?php echo $Vay.$PRI["NameImg"] ?>" alt="<?php echo $PRI["Description"]?>">
							<div><?php echo $PRT["$b"] ?></div>
						</div>
					<?php } ?>
				</div>
			<?php }?>
			<div class="textp"><?php echo $HomeArr["Простое оформление заказа"];?></div>
		</section>

		<section class="products">
			<div class="TextPAd subtitle_text"><?php echo $Product["Название страницы"]?></div>
			<img class="Rectangle1" src="<?php echo $Vay.$ImgArr["Линия1б"] ?>" alt="<?php echo $ImgNameArr["Линия1б"]?>"><br>
			<img class="Rectangle2" src="<?php echo $Vay.$ImgArr["Линия2б"] ?>" alt="<?php echo $ImgNameArr["Линия2б"]?>">
			<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between">		
				<?php 
				$TUPEPROD=mysqli_query($connection, "SELECT * FROM `production` WHERE `TitleTextName`='Название раздела' ");
				$HomeImgNamb=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Home' AND `TitleTextName`='Числа'");

				if ($TUPEPROD AND $HomeImgNamb) { 
					while ($rowText=mysqli_fetch_assoc($TUPEPROD) AND $NamberHomeST=mysqli_fetch_assoc($HomeImgNamb)) {?>

						<div class="pr">
							<img class="namberprod" src="<?php echo $Vay.$NamberHomeST["NameImg"]?>" alt ="<?php echo $NamberHomeST["Description"]?>">
							<?php  $HomeImgLine=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Home' AND `TitleTextName`='Линия'");
							if ($NamberHomeLI=mysqli_fetch_assoc($HomeImgLine)) { 
								echo '<img class="line"src="'.$Vay.$NamberHomeLI["NameImg"].'" alt ="'.$NamberHomeLI["Description"].'">';								
							};?>
							<a class="Pprod" href="PRODUCT.php#<?php echo $rowText["$b"] ?>"><?php echo $rowText["$b"] ?><br></a>  
							<div class="infoprod" >
								<?php $tr=mysqli_query($connection, "SELECT * FROM `production` WHERE `Tupe`='".$rowText["Text RU"]."' AND `TitleTextName` ='Пояснения на главной' ");
								if ($TextExplanation=mysqli_fetch_assoc($tr)) { 
									echo '<div class="infoprod" >'.$TextExplanation["$b"].'</div> ';								
								};
								?>
							</div>
							<?php $TUPEPROD2=mysqli_query($connection, "SELECT * FROM `production` WHERE `Tupe`='".$rowText["Text RU"]."' AND `TitleTextName` ='Название продукции' ");
							if ($TUPEPROD2) { 
								echo "<ul>";
								while ($asw1=mysqli_fetch_assoc($TUPEPROD2)) {
									echo '<li><a href="PRODUCTION.php?'.$asw1["$b"].'">'.$asw1["$b"].'</a> </li> ';

								};
								echo "</ul>";
							};
							?>
						</div> 
					<?php }; 
				} ?>

			</div>		
		</section>

		<section class="company">
			<div class="TextPAd subtitle_text"><?php 
			echo $HomeArr["Заголовок 2"];?></div>
			<img class="Rectangle1" src="<?php echo $Vay.$ImgArr["Линия3ч"] ?>" alt="<?php echo $ImgNameArr["Линия3ч"]?>"><br>
			<img class="Rectangle2" src="<?php echo $Vay.$ImgArr["Линия4ч"] ?>" alt="<?php echo $ImgNameArr["Линия4ч"]?>">
			<div class="textcopm main_flex_nowrap flex_aitem-center flex_jcontent-between">
				<div class="flex_aitem-center flex_jcontent-between">
					<?php $TextComp=mysqli_query($connection, "SELECT * FROM `home` WHERE `TitleTextName` ='О нас' ");
					if ($TextComp) { 
						while ($asw1=mysqli_fetch_assoc($TextComp)) {
							echo '<p>'.$asw1["$b"].'</p>';

						};
					}?>
				</div>


			</div>		
		</section>
	<?php }?>
	<img class="partners" src="<?php echo $Vay.$ImgArr["Партнеры"] ?>" alt="<?php echo $ImgNameArr["Партнеры"]?>">


	<?php  include 'bell.php';
	include 'request.php';
	echo $footer;?>


</body>
</html>