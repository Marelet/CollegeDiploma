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
	$AboutImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='AboutCompany' ");
	if ($AboutImg){
		$Vay="img/AboutCompany/"?>

		<section class="fonCompane">
			<div>
				<div class=" main_headings_text TextsubtitleCompane ">
					<?php 
					echo $About_companyArr["Заголовок баннера"];
					?> 
				</div>

				<div class="main_flex_nowrap TextsubtitleCompane2 text_center">
					<?php 
					echo $About_companyArr["Текст баннера"];
					?> 
				</div>
			</div>
		</section>

		<?php $TextP=mysqli_query($connection, "SELECT * FROM `aboutcompane` WHERE `TitleTextName` ='Основной текст страницы' ");
		if ($TextP) { ?>
			<section class="white" >
				<div class="basic_indents text_center TextComp">
					<?php while ($Tx=mysqli_fetch_assoc($TextP)) {
						echo '<p>'.$Tx[$b].'</p>';
					};?>
				</div>
			</section>
		<?php }?>

		<?php $TextComp=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='Галерея' AND `GalleryId`='AboutCompany'");
		if ($TextComp) { ?>
			<div class="main_flex_nowrap grey rowr box">
				<?php while ($asw1=mysqli_fetch_assoc($TextComp)) {
					echo '<img class="zoomprm" src="'.$Vay.$asw1["NameImg"].'" alt="'.$asw1["Description"].'">';
				};?>
			</div>
		<?php }?>



		<?php $PremImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName`='Преимущества' AND `GalleryId`='AboutCompany'");
		$TextPr = mysqli_query($connection, "SELECT * FROM `aboutcompane` WHERE `TitleTextName` ='Преимущества'");
		if ($PremImg  AND $TextPr) { ?>
			<section class="basic_indents TextComp">
				<?php while ($PR=mysqli_fetch_assoc($PremImg)  AND $TXT=mysqli_fetch_assoc($TextPr)) {?>
					<div class="main_flex_nowrap flex_aitem-center flex_jcontent-between TranformText row ">
						<img class="ProdNumberPrem2" src="<?php echo $Vay.$PR["NameImg"]?>" alt="<?php echo $PR["Description"]?>">
						<p class="null"><?php echo $TXT["$b"];?></p>
					</div>
				<?php };?>
			</section>
		<?php }?>

		<?php $TextP=mysqli_query($connection, "SELECT * FROM `aboutcompane` WHERE `TitleTextName` ='Наши возможности' ");
		if ($TextP) { ?>
			<section class="white" >
				<div class="basic_indents text_center TextComp">
					<?php while ($Tx=mysqli_fetch_assoc($TextP)) {
						echo '<p>'.$Tx[$b].'</p>';
					};?>
				</div>
			</section>
		<?php }?>

	<?php }?>

	<?php  include 'bell.php';
	include 'request.php';
	echo $footer;?>
</body>
</html>