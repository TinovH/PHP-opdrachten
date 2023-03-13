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
    <label>Zijde 1:</label>
    <input type="numbers" name="zijde1" id="zijde1"  required>
    <br>
    <label>Zijde 2:</label>
    <input type="numbers" name="zijde2" id="zijde2"  required>
    <br>
    <label>Zijde 3:</label>
    <input type="numbers" name="zijde3" id="zijde3"  required>
    <br>
    <input type="submit" name="verzenden" value="verzenden"></input>
    <br>
    <br>

    <?php
    if (isset($_POST["verzenden"])){
        $z1 = $_POST["zijde1"];
        $z2 = $_POST["zijde2"];
        $z3 = $_POST["zijde3"];

        if($z1 > $z2 && $z1 > $z3){
            if($z3 + $z2 > $z1){
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan wel!";
            } else {
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan niet!";
            }
        } else if($z2 > $z1 && $z2 > $z3){
            if($z1 + $z3 > $z2){
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan wel!";
            } else {
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan niet!";
            }
        } else if($z3 > $z2 && $z3 > $z1){
            if($z1 + $z2 > $z3){
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan wel!";
            } else {
                echo "zijde 1: ". $z1 . "<br>";
                echo "zijde 2: ". $z2 . "<br>";
                echo "zijde 3: ". $z3 . "<br>";
                echo "Kan niet!";
            }
        }
    }

    ?>


</body>
</html>