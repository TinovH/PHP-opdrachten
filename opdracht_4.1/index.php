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

$time = date("G");

if ($time >= 6 && $time < 12) {
    echo "Het is ochtend";
} else if ($time >=12 && $time < 18) {
    echo "Het is middag";
} else if ($time >= 18) {
    echo "Het is avond";
} else if ($time < 6) {
    echo "Het is nacht";
}



?>

</body>
</html>

