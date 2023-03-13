<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newform</title>
</head>
<body>
<?php
    session_start();
    ?>
<form action="replyform.php" method="post">
<label>Voornaam</label>
<input type="text" name="name" value="<?php echo $_SESSION["voornaam"];?>">

<label>Achternaam</label>
<input type="text" name="surname" value="<?php echo $_SESSION["achternaam"];?>">

<label>Email</label>
<input type="email" name="email" value="<?php echo $_SESSION["email"];?>">

<label>Geslacht:</label>
<input type="radio" name="gender" value="Man" <?php if($_SESSION ["geslacht"] == "Man"){echo "checked";}  ?> >Man
<input type="radio" name="gender" value="Vrouw" <?php if($_SESSION ["geslacht"] == "Vrouw"){echo "checked";} ?> >Vrouw

<label>straatnaam</label>
<input type="text" name="streetname" value="<?php echo $_SESSION["straatnaam"];?>">

<label>Huisnummer</label>
<input type="text" name="housenumber" value="<?php echo $_SESSION["huisnummer"];?>">

<label>Stad</label>
<input type="text" name="city" value="<?php echo $_SESSION["stadnaam"];?>">

<label>Land</label>
<select>
 <option <?php if($_SESSION ["land"] == "Belgie"){echo "selected";} ?> >Belgie</option>
 <option <?php if($_SESSION ["land"] == "Duitsland"){echo "selected";} ?>>Duitsland</option>
 <option <?php if($_SESSION ["land"] == "Oostenrijk"){echo "selected";} ?> >Oostenrijk</option>
 <option <?php if($_SESSION ["land"] == "Zwitserland"){echo "selected";} ?> >Zwitserland</option>
 <option <?php if($_SESSION ["land"] == "Italie"){echo "selected";} ?>>Italie</option>
</select>



<label>Wachtwoord</label>
<input type="password" name="password" value="<?php echo $_SESSION["wachtwoord"];?>">

<button type="submit" name="submit">Verzenden</button>

</form>
</body>
</html>