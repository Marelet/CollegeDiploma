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
		

		<div class="main_headings_text BackFonProdHead"><?php echo $ContactArr["Название страницы"];?></div>
		<section class="white">
			<div class="main_flex_nowrap basic_indents flex_aitem-center">
				<?php $TextConta=mysqli_query($connection, "SELECT * FROM `contact` WHERE `TitleTextName` ='Контактная информация' ");
				if ($TextConta) { ?>
					<div class="TextContact">
						<?php while ($Tx=mysqli_fetch_assoc($TextConta)) {
							echo '<p>'.$Tx[$b].'</p>';
						};?>
					</div>
				<?php }?>


				<form action="/action_page.php" class="form-container3">
					<div class="text_center">
						<h1><?php echo $HomeArr["Форма 1"] ?></h1>
						<h3><?php echo $HomeArr["Форма1т1"] ?></h3>
					</div>

					<label for="name"><b><?php echo $HomeArr["ФИО"] ?></b></label>
					<input type="text" placeholder="Загребельный Максим Викторович" name="name" required>

					<label for="phone" ><b><?php echo $HomeArr["ТелефонФ"] ?></b></label>
					<input type="text"  pattern="[0-9]{10}" placeholder="0504899113" name="phone" required>

					<label for="email"><b><?php echo $HomeArr["Почтаф"] ?></b></label>
					<input type="email" placeholder="alinasurk@gmail.com" name="email" required>

					<button type="submit" class="btn4"><?php echo $HomeArr["ОТПРАВИТЬФ"] ?></button>
				</form>

			</div>
		</section>
	<?php }?>

	<?php 
	include 'request.php';
	echo $footer;?>
	
</body>
</html>