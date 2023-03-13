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

$one = 40;
$two = 30;

if($one >= $two){
    $answer = $one * 2 + $two;
    echo "Uitkomst $answer";
} else {
    $answer = $two * 2 + $one;
    echo "Uitkomst $answer";
}

?>

</body>
</html>