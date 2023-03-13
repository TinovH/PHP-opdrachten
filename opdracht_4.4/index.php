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

$price = "60";

if($price > 150) {
    $newPrice = $price * (1.19);
    echo "Oude prijs: € $price . Na verhoging van 19% is de prijs: € $newPrice";
} else if ($price < 55) {
    $newPrice = $price * (1.11);
    echo "Oude prijs: € $price . Na verhoging van 11% is de prijs: € $newPrice";
} else {
    $newPrice = $price * (1.16);
    echo "Oude prijs: € $price . Na verhoging van 16% is de prijs: € $newPrice";
}

?>

</body>
</html>