<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 6.4</title>
    <link rel="stylesheet" href="./opdracht6-4.css">
</head>
<body>
    <form method="post" action="">
        <div class="form-container">
        <label for="price">Prijs</label>
        <input type="text" name="price" id="price" required>
        </div>
        <div class="form-container">
        <label for="percentage">Korting (%)</label>
        <input type="text" name="percentage" id="percentage" require>
        </div>
        <button type="submit" name="submit" value="submit">Berekenen</button>
    </form>
    <?php
    if ($_POST) {
        $num1 = $_POST["price"];
        $num2 = $_POST["percentage"];
    }
    if (isset($_POST['submit'])) {
    $new = $num1 - $num1 / 100 * $num2;
    echo "Bedrag inclusief ".$num2."% korting: € ".number_format($new,2,',');
    }
    ?>
</body>
</html>