<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>Leeftijd</label>
    <input type="numbers" name="leeftijd" id="leeftijd"  required>
    <br>
    <label required>Stempas ontvangen?</label>
    <input type="radio" name="false" id="false" >
    <label>Nee</label>
    <input type="radio" name="true" id="true" >
    <label>Ja</label>
    <br>
    <input type="submit" name="verzenden" value="verzenden"></input>
    <br>
    <br>

    <?php
    if (isset($_POST["verzenden"])){
    $number = $_POST["leeftijd"];
    
    
    if ($number <16){
    echo "Je mag nog niet praktijkexamen doen voor je scooterrijbewijs. <br>";
    echo "Je mag nog niet stemmen, want je hebt geen stempas!";
    } else if ($number <18){
        echo "Je mag praktijkexamen voor je scooterrijbewijs doen. <br>";
        echo "Je mag nog niet stemmen, want je hebt geen stempas!";
        } else{
            echo "Je mag praktijkexamen voor je scooterrijbewijs doen. <br>";
            if(isset($_POST["true"])){
                echo "Je mag stemmen, want je hebt een stempas!";
            } else {
                echo "Je mag nog niet stemmen, want je hebt geen stempas!";
            }
            } 


    }
    ?>


</body>
</html>