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
    <label>Getal:</label>
    <input type="numbers" name="getal" id="getal"  required>
    <br>
    <input type="submit" name="verzenden" value="verzenden"></input>
    <br>
    <br>


    <?php
    if (isset($_POST["verzenden"])){
        $getal = $_POST["getal"];
        $totaal = 0;

        echo "Waarde van variabele getal is:". $getal . "<br><br>";
        echo "optelling is als volgt: <br>";
        for ($i = 1; $i <= $getal; $i++) {
            
            $totaal += $i;
            echo "$i ";
            if ($i < $getal) {
            echo "+ ";
            } else {
            echo "= $totaal";
            }
        }
    }

    ?>


</body>
</html>