<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replyform</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <main>
        <h1>U bent ingelogd hier zijn uw ingevulde gegevens</h1>
        <p>Let op, laat dit niet zomaar door aan andere zien!</p>
        <?php
if(isset($_POST["submit"])){
 echo"Ingevulde naam is: " .$_POST["voornaam"];
 echo"<br>Ingevulde achternaam is: " .$_POST["achternaam"];
 echo"<br>Ingevuld geslacht is: " .$_POST["geslacht"];
 echo"<br>Ingevulde email is: " .$_POST["email"];
 echo"<br>Ingevuld wachtwoord is: " .$_POST["wachtwoord"];
 echo"<br>Ingevulde straatnaam is: " .$_POST["straatnaam"];
 echo"<br>Ingevulde huisnummer is: " .$_POST["huisnummer"];
 echo"<br>Ingevulde stad is: " .$_POST["stadnaam"];
 echo"<br>Ingevulde land is: " .$_POST["land"];
 $_SESSION["voornaam"] = $_POST["voornaam"];
 $_SESSION["achternaam"] = $_POST["achternaam"];
 $_SESSION["geslacht"] = $_POST["geslacht"];
 $_SESSION["email"] = $_POST["email"];
 $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
 $_SESSION["straatnaam"] = $_POST["straatnaam"];
 $_SESSION["huisnummer"] = $_POST["huisnummer"];
 $_SESSION["stadnaam"] = $_POST["stadnaam"];
 $_SESSION["land"] = $_POST["land"];
}
else{
    echo"<h2>Er is iets niet goed gegaan probeer het opnieuw.</h2>";
}
        ?>
<form action="newform.php" method="post"><input type="submit" name="Accepteer" value="Accepteer"></form>

    </main>
</body>
</html>