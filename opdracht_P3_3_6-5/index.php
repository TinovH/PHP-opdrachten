<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Remvertraging en lengte remspoor omrekenen</h1>
<form method="post" action="">
		<p>
			<label for="lengte">Lengte remspoor (in meters):</label><br>
			<input type="number" name="lengte" id="lengte" required>
		</p>
		<p>
			<label for="remver">Remvertraging (in m/s²):</label><br>
			<input type="number" name="remver" id="remver" value="5.5" required>
		</p>
		<p>
			<input type="submit" name="submit" value="snelheid berekening">
		</p>
	</form>
	<?php
		if (isset($_POST['submit'])) {

			if (!empty($_POST['lengte']) && !empty($_POST['remver'])) {

				$lengte = $_POST['lengte'];
				$remver = $_POST['remver'];

				$snelheid = sqrt(2 * $remver * $lengte) * 3.6;

				echo "Snelheid van een auto met remspoor van $lengte meter is: " .round($snelheid, 0). " km/u.";
			} else {
				echo "Vul zowel de lengte van het remspoor als de remvertraging in.";
			}
		}
	?>
</body>
</html>
