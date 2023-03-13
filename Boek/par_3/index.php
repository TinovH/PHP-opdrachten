<html>
    <head>
        <title>Hello World example</title>
    </head>


    <body>
        <?php
            $name = "Henk";
            echo "Hallo: $name";
        ?>

    <br>

    <?php
        $days = array();
        $days[0] = "Zondag";
        $days[1] = "Maandag";
        $days[2] = "Dinsdag";
        $days[3] = "Woensdag";
        $days[4] = "Donderdag";
        $days[5] = "Vrijdag";
        $days[6] = "Zaterdag";

        echo $days[5];
        ?>

        <br>

        <?php
            date_default_timezone_set("Europe/Amsterdam");

            $today = date("j F Y");
            echo $today;

            ?>

            <br>
            <br>

            <?php
                date_default_timezone_set("Europe/Amsterdam");

                $today = date("j F Y");
                echo "Vandaag is het: $today";

                echo "<br>";

                $time = date("H:i");
                echo "Het is nu: $time uur";

                echo "<br>";

                $month = date("F");
                $daysInMonth = date("t");
                echo "Deze maand, $month heeft $daysInMonth dagen";

                echo "<br>";

                $week = date("W");
                echo "Deze week is het week: $week";
            ?>

            <br>
            <br>

            <?php 
                $today = date("l j F Y");
                echo "Het is vandaag: $today";

                echo "<br>";

                $day = date("z");
                echo "Vandaag is het de $day e dag van het jaar";

                echo "<br>";

                $weekday = date("l");
                $week = date("w");
                echo "$weekday is de $week e dag van de week";

                echo "<br>";

                $month = date("F");
                $daysInMonth = date("t");
                echo "De maand $month Heeft in totaal $daysInMonth dagen";

                echo "<br>";

                $var1 = 1;
                $schrik = date("L");
                $year = date("Y");
                if($schrik < $var1) {
                    echo "Het jaar $year is geen schrikkeljaar";
                } else {
                    echo "Het jaar $year is een schrikkeljaar";
                }

            ?>


    </body>
</html>