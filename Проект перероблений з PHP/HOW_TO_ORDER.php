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
	$HowToImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Projects' ");
	if ($HowToImg){
		$Vay="img/HowToOrder/";?>


		<div class="main_headings_text BackFonProdHead BackFonHowToOrder">КАК ЗАКАЗАТЬ</div>

		<section class="white" >

			<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between">
				<div class="main_flex_nowrap flex_aitem-center OrderСompositions OrderСomp1_3 row" >
					<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра1"]?>"  alt="<?php echo $ImgNameArr["Цифра1"]?>">
					<div> 
						<?php 
						echo $How_to_orderArr["Первый пункт"];
						?>
					</div>
				</div>


				<div class="main_flex_nowrap flex_aitem-center OrderСompositions OrderСomp2_7 row" >
					<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра2"]?>">
					<div>
						<?php 
						echo $How_to_orderArr["Второй пункт"];
						?>
					</div>
				</div>	

				<div class="main_flex_nowrap flex_aitem-center OrderСompositions OrderСomp1_3 row" >
					<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра3"]?>">
					<div>
						<?php 
						echo $How_to_orderArr["Третий пункт"];
						?>
					</div>
				</div>		
			</div>
			<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between">
				<div class="main_flex_nowrap flex_aitem-center OrderСompositions OrderСomp4_5 row">
					<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра4"]?>">
					<div>
						<?php 
						echo $How_to_orderArr["Четвертый пункт"];
						?>
					</div>
				</div>	

				<div class="main_flex_nowrap flex_aitem-center OrderСompositions OrderСomp4_5 row">
					<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра5"]?>">
					<div>
						<?php 
						echo $How_to_orderArr["Пятый пункт"];
						?>	
					</div>
				</div>
			</div>
			<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between OrderСompositions OrderСomp6 row">	
				<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра6"]?>">
				<div>
					<?php 
					echo $How_to_orderArr["Шестой пункт"];
					?>
				</div>	
			</div>
			<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between OrderСompositions OrderСomp2_7 row" >
				<img class="ImgOrderComp" src="<?php echo $Vay.$ImgArr["Цифра7"]?>" >
				<div>
					<?php 
					echo $How_to_orderArr["Седьмой пункт"];
					?>
				</div>
			</div>
		<?php }?>
	</section>
	<?php  include 'bell.php';
	include 'request.php';
	echo $footer;?>
	
</body>
</html>
