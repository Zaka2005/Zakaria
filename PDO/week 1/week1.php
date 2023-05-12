<!DOCTYPE html>
<html>
<head>
	<title>Gebruikersgegevens</title>
</head>
<body>
	<form action="" method="GET">
		<label for="naam">Naam:</label>
		<input type="text" name="naam" id="naam" required><br>

		<label for="achternaam">Achternaam:</label>
		<input type="text" name="achternaam" id="achternaam" required><br>

		<label for="leeftijd">Leeftijd:</label>
		<input type="number" name="leeftijd" id="leeftijd" required><br>

		<label for="adres">Adres:</label>
		<input type="text" name="adres" id="adres" required><br>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required><br>

		<input type="submit" value="Versturen">
	</form>

	<?php

	$naam = $_GET["naam"];
    $achternaam = $_GET["achternaam"];
	$leeftijd = $_GET["leeftijd"];
	$adres = $_GET["adres"];
	$email = $_GET["email"];
	
	echo $naam;
	echo $achternaam;
	echo $leeftijd;
	echo $adres;
	 echo $email;
		
	?>
</body>
</html>

	