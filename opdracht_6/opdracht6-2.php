<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 6.2</title>
</head>
<body>
    <form method="post" action="">
        <label for="num1">Getal 1</label>
        <input type="text" name="num1" id="num1" required>
        <br>
        <input type="radio" name="select" id="addup" value="addup" checked>
        <label for="">Optellen</label>
        <input type="radio" name="select" id="subtract" value="subtract">
        <label for="">Aftrekken</label>
        <input type="radio" name="select" id="multiply" value="multiply">
        <label for="">Vermenigvuldigen</label>
        <input type="radio" name="select" id="divide" value="divide">
        <label for="">Delen</label>
        <br>
        <label for="num2">Getal 2</label>
        <input type="text" name="num2" id="num2" required>
        <br><br>
        <button type="submit" name="submit" value="submit">Berekenen</button>
    </form>
    <br><br>
    <?php
    if ($_POST) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    }

    if (isset($_POST['submit']) && $_POST['select'] == "addup") {
        $calculation = $num1 + $num2;
        echo $num1." + ".$num2." = ".$calculation;
    }
    if (isset($_POST['submit']) && $_POST['select'] == "subtract") {
        $calculation = $num1 - $num2;
        echo $num1." - ".$num2." = ".$calculation;
    }
    if (isset($_POST['submit']) && $_POST['select'] == "multiply") {
        $calculation = $num1 * $num2;
        echo $num1." x ".$num2." = ".$calculation;
    }
    if (isset($_POST['submit']) && $_POST['select'] == "divide") {
        $calculation = $num1 / $num2;
        echo $num1." : ".$num2." = ".$calculation;
    }
    ?>
</body>
</html>