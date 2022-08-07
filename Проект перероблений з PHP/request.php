<button class="open-button" onclick="openForm()"><?php echo $HomeArr["Форма 2"] ?></button>
<div class="form-popup" id="myForm">
	<form action="#" class="form-container">
		<div class="text_center">
			<h1><?php echo $HomeArr["Форма 2"] ?></h1>
			<h3><?php echo $HomeArr["Форма2т1"] ?></h3>
		</div>
		<div class="main_flex_nowrap flex_aitem-center form-c1"> 
			<label for="name"><b><?php echo $HomeArr["ФИО"] ?></b></label>
			<input type="text" placeholder="Загребельный Максим Викторович" name="name" required>

			<label for="phone"><b><?php echo $HomeArr["ТелефонФ"] ?></b></label>
			<input type="text" pattern="[0-9]{10}" placeholder="0504899113" name="phone" required>
		</div>

		<div class="main_flex_nowrap flex_aitem-center form-c1" >
			<label for="email"><b><?php echo $HomeArr["Почтаф"] ?></b></label>
			<input type="email" placeholder="alinasurk@gmail.com" name="email" required>

			<label for="product"><b><?php echo $HomeArr["Тип продукцииФ"] ?></b></label>
			<select>
				<?php $TextComp=mysqli_query($connection, "SELECT * FROM `production` WHERE `TitleTextName` ='Название продукции' ");
					if ($TextComp) { 
						while ($asw1=mysqli_fetch_assoc($TextComp)) {
							echo '<option>'.$asw1["$b"].'</option>';
						};
					}?>
			</select>
		</div>

		<label class="text_center" for="preferences"><b><?php echo $HomeArr["ПредпочтенияФ"] ?></b></label>
		<textarea class="EntryField" wrap="hard" placeholder="<?php echo $HomeArr["ВШФ"] ?>" name="preferences"></textarea>

		<button type="submit" class="btn4"><?php echo $HomeArr["ОТПРАВИТЬФ"] ?></button>
		<button type="submit" class="btn4 cancel" onclick="closeForm()"><?php echo $HomeArr["ЗАКРЫТЬФ"] ?></button>
	</form>
</div>