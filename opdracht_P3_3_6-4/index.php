<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
		<label>Straal:</label>
		<input type="number" name="straal" required>
		<input type="submit" value="Bereken">
	</form>
	<br>
    <?php
	if(isset($_POST['straal'])) {
		$straal = $_POST['straal'];

		$omtrek = 2 * pi() * $straal;
		$oppervlakte = pi() * pow($straal, 2);

		echo "<p>De omtrek van de cirkel met straal $straal is: $omtrek</p>";
		echo "<p>De oppervlakte van de cirkel met straal $straal is: $oppervlakte</p>";
	}
    ?>
</body>
</html>