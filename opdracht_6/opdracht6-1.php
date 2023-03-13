<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 6.1</title>
</head>

<body>
    <form method="post" action="">
        <label for="price">Bedrag exclusief BTW</label>
        <input type="text" name="price" id="price" required>
        <br>
        <input type="radio" name="btw" id="btwlow" value="low" checked>
        <label for="btwlow">Laag, 9%</label>
        <br>
        <input type="radio" name="btw" id="btwhigh" value="high">
        <label for="btwhigh">Hoog, 21%</label>
        <br><br>
        <button type="submit" name="submit" id="submit" value="submit">Uitrekenen</button>
    </form>
    <br><br>
    <?php
    if (isset($_POST['submit']) && $_POST['btw'] == "low") {
        $price = $_POST["price"] + $_POST["price"] / 100 * 9;
        echo "Bedrag inclusief 9 BTW: € ". number_format($price, 2, ',', '.');
    } else if (isset($_POST['submit']) && $_POST['btw'] == "high") {
        $price = $_POST["price"] + $_POST["price"] / 100 * 21;
        echo "Bedrag inclusief 21 BTW: € $price";
    } 
    ?>
</body>

</html>