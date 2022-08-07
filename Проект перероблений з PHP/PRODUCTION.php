<?php session_start();
$row = $_SESSION['TRon'];?>
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
	$ProductImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Production'  ");
	if ($ProductImg){
		$Vay="img/Production/";?>   

		<div class="main_headings_text BackFonProdHeadMaf" style="line-height: 5vw; padding: 0 4vw 6vw 4vw">
			<?php echo $ProductionArr["Название продукции"];?></div>

			<section class="white TovProdSection FonText" >
				<div class="all TextDescriptionsTov1 main_flex_nowrap flex_aitem-center">
					<div class="flex_aitem-center">
						<?php
							$ImgProduct=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='".$a."' AND `GalleryId`='Production'");
							if ($ImgProduct) { ?>
								<div class="slideshow-container">

									<?php while ($Foto=mysqli_fetch_assoc($ImgProduct)) {	?>
										<div class="class1">
											<img src="<?php echo $Vay.$Foto["NameImg"] ?>"  alt="<?php echo $Foto["NameImg"] ?>" style="width:100%">
										</div>
									<?php };?>						
									<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
									<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>

									<script src="JS.js"></script>
								</div>
							<?php } ?>

						
						


					</div>

					<div class="ProdTexTov">
						<p><?php echo $ProductionArr["Текст первого раздела возле слайдера"]?></p>
					</div>	
				</div>
				<div class="basic_indents">
					<p><?php echo $ProductionArr["Текст первого раздела после слайдера"];?></p>
				</div>
			</section>

			<section class="TovProdSection" >
				<div class=" basic_indents  subtitle_text1"><?php echo $ProductionArr['Преимущества']?></div>
				<?php $BenefitsText=mysqli_query($connection, "SELECT * FROM `production` WHERE `Name`='".$a."' AND `TitleTextName` ='Пункты преимуществ'");
				$BenefitsImg = mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Production' AND `TitleTextName` ='Цифры'");

				if ($BenefitsText and $BenefitsImg) { ?>
					<div class="BenefitsBox">
						<?php while ($PR=mysqli_fetch_assoc($BenefitsText) AND $PRI=mysqli_fetch_assoc($BenefitsImg)) {?>
							<div class="main_flex_nowrap flex_aitem-center SectionPrem" >
								<img class="ProdNumberPrem" src="<?php echo $Vay.$PRI["NameImg"] ?>">
								<div><?php echo $PR["$b"] ?></div>
							</div>
						<?php } ?>
					</div>
				<?php }?>

			</section>

			<section class="white FonTex TovProdSection">

				<?php $TexText=mysqli_query($connection, "SELECT * FROM `production` WHERE `Name`='".$a."' AND `TitleTextName` ='Изготовления текст'");

				if ($TexText) { ?>
					<div class="basic_indents subtitle_text1 "><?php echo $ProductionArr["Технология изготовления"];?></div>
					<div class="basic_indents">
						<?php while ($PR=mysqli_fetch_assoc($TexText)) {?>
							<p><?php echo $PR["$b"];?></p>
						<?php } ?>
					</div>
				</div>
			<?php }?>

		</section>

	<?php }?>

	<?php  include 'bell.php';
	include 'request.php';
	echo $footer;?>


</body>
</html>