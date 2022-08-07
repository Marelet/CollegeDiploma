<?php $vv="img/Navigation/";?>
<button class=" open-button open-button2" onclick="openFormCall()"><img class="imgCall" src="<?php echo $vv.$ImgArr["форма обратного звонка"]?>"></button>
	<div class="form-popup" id="myFormCall">
		<form action="#" class="form-container form-container2">
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
			<button type="submit" class="btn4 cancel" onclick="closeFormCall()"><?php echo $HomeArr["ЗАКРЫТЬФ"] ?></button>
		</form>
	</div>