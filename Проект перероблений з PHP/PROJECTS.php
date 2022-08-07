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
	$ProjectImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Projects' ");
	if ($ProjectImg){
		$Vay="img/Projects/";?>
		

		<div class="main_headings_text BackFonProdHead"><?php echo $ProjectsArr["Название страницы"];?> </div>

		<section class="white " >

			<div class="subtitle_textProect text_center TextComp">
				<?php 
				echo $ProjectsArr["Заголовок"];
				?> 
			</div>
			

			<?php $TextPJ1Prt=mysqli_query($connection, "SELECT * FROM `project` WHERE `TitleTextName` ='Первый пункт партнеров' ");
			$TextPJ2Prt=mysqli_query($connection, "SELECT * FROM `project` WHERE `TitleTextName` ='Второй пункт партнеров' ");
			$ImgPJ1Prt=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='Первый пункт партнеров' ");
			$ImgPJ2Prt=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='Второй пункт партнеров' ");
			if ($TextPJ1Prt AND $TextPJ2Prt AND $ImgPJ1Prt AND $ImgPJ2Prt) { ?>
				<div class="basic_indents TextComp ">
					<?php while ($TxPJ1=mysqli_fetch_assoc($TextPJ1Prt) AND $TxPJ2=mysqli_fetch_assoc($TextPJ2Prt) AND $ImgPJ1=mysqli_fetch_assoc($ImgPJ1Prt) AND $ImgPJ2=mysqli_fetch_assoc($ImgPJ2Prt)) {
						echo '<p>'.$TxJ[$b].'</p>';

						echo '<div class=" main_flex_nowrap flex_aitem-center row">
						<img  class="PojLogo" src="'.$Vay.$ImgPJ1["NameImg"].'">
						<div class="ProjText">'.$TxPJ1["$b"].'</div>
						</div>
						<div class=" main_flex_nowrap flex_aitem-center row">
						<div class="ProjText">'.$TxPJ2["$b"].'</div>
						<div class="PojLogo ">
						<img  class="PojLogo" src="'.$Vay.$ImgPJ2["NameImg"].'">
						</div>
						</div>';
					};?>
				</div>
			<?php }?>


			<div class="ProjText1">
				<?php 
				echo $ProjectsArr["Капитал"];
				?>
			</div>
			<div class="subtitle_textProect text_center TextComp">
				<?php 
				echo $ProjectsArr["Выгодное сотрудничество"];
				?> 
			</div>


			<?php $ImgPjG=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='Галерея' AND `GalleryId`='Projects'");
			if ($ImgPjG) { ?>
				<div class="main_flex_nowrap grey rowr box">
					<?php while ($asw1=mysqli_fetch_assoc($ImgPjG)) {
						echo '<img class="zoomprm" src="'.$Vay.$asw1["NameImg"].'" alt="'.$asw1["Description"].'">';
					};?>
				</div>
			<?php }?>
		</section>

	<?php }?>
	<?php  include 'bell.php';
	include 'request.php';
	echo $footer;?>
</body>
</html>