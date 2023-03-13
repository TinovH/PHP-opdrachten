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
session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

$_SESSION['visits']++;

echo 'Deze pagina heb je al: ' . $_SESSION['visits'] . ' keer bekeken voordat de internet browser is afgesloten.';
echo '<br><br>';
echo 'In totaal heb je deze pagina al: ' . $_SESSION['visits'] . ' keer bekeken.';
?>

</body>
</html>