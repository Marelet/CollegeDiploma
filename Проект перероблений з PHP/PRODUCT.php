<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRAVO HTML</title>
	<link rel="stylesheet"  href="CSS.css">
	<script src="JS.js"></script>
	<script type="text/javascript">
		function init() {

			history.pushState('', document.title, window.location.pathname);

		}
	</script>
</head>
<body  onload="init()">
	
	<?php  
	include 'nav.php';
	$ProductImg=mysqli_query($connection, "SELECT * FROM `img` WHERE `GalleryId`='Projects'  AND `GalleryId`='ProductR' ");
	if ($ProductImg){
		$Vay="img/Product/";?>



		<script src="JS.js"></script>

		<section class="BackFonProd">
			<?php 


			$TUPEPROD=mysqli_query($connection, "SELECT * FROM `production` WHERE `TitleTextName`='Название раздела' ");
			if ($TUPEPROD) { 

				while ($rowText=mysqli_fetch_assoc($TUPEPROD)) {
					?>
					<details>
						<summary class="subtitle_text summary flex_aitem-center " id="<?php echo $rowText["$b"] ?>"><?php echo $rowText["$b"] ?>
						<?php $ImgLine=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='Линия' AND `GalleryId`='Product'");
						if ($ImgLine) { ?>
							<div>
								<?php while ($Line=mysqli_fetch_assoc($ImgLine)) {
									echo '<img  src="'.$Vay.$Line["NameImg"].'" alt="'.$Line["Description"].'"><br>';
								};?>
							</div>
						<?php }?>
					</summary>
					<div class="BackFonProd2 white">
						<div class="basic_indents all main_flex_nowrap ">

							<?php $ImgProd=mysqli_query($connection, "SELECT * FROM `img` WHERE `TitleTextName` ='".$rowText["Text RU"]."' AND `GalleryId`='Product'");
							if ($ImgProd) { ?>
								<div class="slideshow-container">

									<?php if ($rowText["Text RU"]=="МАФ (Временные сооружения)"){	
										while ($Foto=mysqli_fetch_assoc($ImgProd)) {	?>
											<div class="class1">
												<img src="<?php echo $Vay.$Foto["NameImg"] ?>"  alt="<?php echo $Foto["NameImg"] ?>" style="width:100%">
											</div>
										<?php };?>						
										<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
										<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
									<?php } 
									elseif ($rowText["Text RU"]=="Быстромонтируемые здания") {
										while ($Foto=mysqli_fetch_assoc($ImgProd)) {	?>
											<div class="class2">
												<img src="<?php echo $Vay.$Foto["NameImg"] ?>"  alt="<?php echo $Foto["NameImg"] ?>" style="width:100%">
											</div>
										<?php };?>
										<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
										<a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
									<?php } elseif ($rowText["Text RU"]=="Сопутствующие товары") {
										while ($Foto=mysqli_fetch_assoc($ImgProd)) {	?>
											<div class="class3">
												<img src="<?php echo $Vay.$Foto["NameImg"] ?>"  alt="<?php echo $Foto["NameImg"] ?>" style="width:100%">
											</div>
										<?php };?>
										<a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
										<a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
									<?php } elseif ($rowText["Text RU"]=="Сопутствующие услуги") {
										while ($Foto=mysqli_fetch_assoc($ImgProd)) {	?>
											<div class="class4">
												<img src="<?php echo $Vay.$Foto["NameImg"] ?>"  alt="<?php echo $Foto["NameImg"] ?>" style="width:100%">
											</div>
										<?php };?>
										<a class="prev" onclick="plusSlides(-1, 3)">&#10094;</a>
										<a class="next" onclick="plusSlides(1, 3)">&#10095;</a>
									<?php } ?>
									<script src="JS.js"></script>
								</div>
							<?php }?>

							<?php $TUPEPRODTEXT=mysqli_query($connection, "SELECT * FROM `production` WHERE `Tupe`='".$rowText["Text RU"]."' AND `TitleTextName` ='Краткое описание разделов' ");
							if ($TUPEPRODTEXT) { 
								while ($Text55=mysqli_fetch_assoc($TUPEPRODTEXT)) {?>
									<div class="TextProdHeading"><?php echo $Text55["$b"] ?></div>
								<?php } }?>

							</div>
						</div>
					</details>
					<div class=" basic_indents">
						<?php $TUPEPRODTEXT=mysqli_query($connection, "SELECT * FROM `production` WHERE `Tupe`='".$rowText["Text RU"]."' AND `TitleTextName` ='Название продукции' ");
						$FotoProdctino=mysqli_query($connection,  "SELECT * FROM `img` WHERE `TitleTextName` ='".$rowText["Text RU"]."' AND `GalleryId`='ProductR'");
						if ($TUPEPRODTEXT AND $FotoProdctino) { ?>
							<div class="box">
								<?php while ($Text56=mysqli_fetch_assoc($TUPEPRODTEXT) AND $FTPRD=mysqli_fetch_assoc($FotoProdctino)) {?>
									<div class="parent ">
										<div class="GrayBacking">
											<a  class="NameProdTov" href="PRODUCTION.php?<?php echo $Text56["$b"]?>" ><?php echo $Text56["$b"] ?></a>
										</div>

										<div class="child">
											<img  src="<?php echo $Vay.$FTPRD["NameImg"] ?>" alt="<?php $FTPRD["Description"]?>">
										</div>

									</div>
								<?php } ?>
							</div>
						<?php }?>

					</div>
				<?php } }?>	
			</section>

		<?php }?>
		<?php  include 'bell.php';
		include 'request.php';
		echo $footer;?>

	</body>
	</html>