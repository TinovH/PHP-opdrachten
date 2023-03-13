<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
        <label>Kilometers</label>
        <input type="text" name="num1" required>
        <button type="submit" name="submit" value="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST["num1"];
?>
    <br>
    <table border='1'>
        <th>Miles</th>
        <th>Kilometers</th>
        <th>Miles</th>
        <th>Kilometers</th>
<?php
            for ($i = 1; $i <= 20; $i++) {
                echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" .($i * $num1). "</td>";
                    echo "<td>".(20 + $i)."</td>";
                    echo "<td>" .((20 + $i) * $num1). "</td>";
                echo "</tr>";
            }
        echo "</table>";
    }
    ?>



</body>
</html>