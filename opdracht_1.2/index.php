<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
                $today = date("l j F Y");
                echo "Het is vandaag: $today";

                echo "<br>";

                $day = date("z");
                echo "Vandaag is het de ".$day."e dag van het jaar";

                echo "<br>";

                $weekday = date("l");
                $week = date("w");
                echo "$weekday is de ".$week."e dag van de week";

                echo "<br>";

                $month = date("F");
                $daysInMonth = date("t");
                echo "De maand ".$month." Heeft in totaal ".$daysInMonth." dagen";

                echo "<br>";

                $var1 = 1;
                $schrik = date("L");
                $year = date("Y");
                if($schrik < $var1) {
                    echo "Het jaar ".$year." is geen schrikkeljaar";
                } else {
                    echo "Het jaar ".$year." is een schrikkeljaar";
                }

            ?>

</body>
</html>