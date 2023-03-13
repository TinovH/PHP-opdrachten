<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
		<label for="start">Beginwaarde:</label>
		<input type="number" id="start" name="start"><br><br>
		<label for="end">Eindwaarde:</label>
		<input type="number" id="end" name="end"><br><br>
		<input type="submit" value="Genereer postcode">
	</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$start = $_POST["start"];
		$end = $_POST["end"];

		function generatePostcode($start, $end) {
			$numbers = range($start, $end);
			shuffle($numbers);
			$code = sprintf("%04d", $numbers[0]);
			$letters = range('A', 'Z');
			shuffle($letters);
			$lettersCode = $letters[0] . $letters[1];
			return $code . $lettersCode;
		}

		echo "Gegenereerde postcode: " . generatePostcode($start, $end);
	}
?>

</body>
</html>