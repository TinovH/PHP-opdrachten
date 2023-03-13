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
        <label>Getal</label>
        <input type="number" name="number" required>
        <input type="submit" name="submit" value="Bereken">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            berekenen($_POST['number']);
        }

        function berekenen($num1) {
            $getal = $num1;
            for ($i = 1; $i <= 25; $i++) {
                $getal2 = $i;
                $resultaat = $getal * $getal * $getal2;
                echo "$getal x $getal x $getal2 = " .$resultaat;
                echo "<br>";
            }
        }
    ?>
</body>
</html>